<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\Orderdetail;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function vnpay_payment(Request $request)
{
    $data = $request->all();
    $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
    $carts = session('carts', []);

    if (count($carts) > 0) {
        // Lưu thông tin đơn hàng vào bảng `Order`
        $order = new Order();
        $order->user_id = $user->id;
        $order->delivery_name = $data['name'] ?? $user->name; // Lấy từ request hoặc mặc định tên user
        $order->delivery_gender = $user->gender ?? 'Unknown';
        $order->delivery_email = $data['email'] ?? $user->email;
        $order->delivery_phone = $data['phone'] ?? $user->phone;
        $order->delivery_address = $data['address'] ?? 'Chưa cung cấp';
        $order->note = $data['note'] ?? null;
        $order->created_at = now();
        $order->type = 'vnpay';
        $order->status = 1; // Đặt trạng thái là 'chờ thanh toán'
        if ($order->save()) {
            // Lưu chi tiết giỏ hàng vào bảng `Orderdetail`
            foreach ($carts as $cart) {
                $orderdetail = new Orderdetail();
                $orderdetail->order_id = $order->id;
                $orderdetail->product_id = $cart['id'];
                $orderdetail->price = $cart['price'];
                $orderdetail->qty = $cart['qty'];
                $orderdetail->discount = $cart['pricesale'] ?? 0;
                $orderdetail->amount = $cart['price'] * $cart['qty'];
                $orderdetail->save();
            }

            // Xóa giỏ hàng sau khi đã lưu đơn hàng thành công
            session(['carts' => []]);
        }
    }

    // Tạo URL thanh toán VNPay
    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    $vnp_Returnurl = route('site.cart.docheckout'); // URL callback khi thanh toán xong
    $vnp_TmnCode = "HGDGXL7J"; // Mã TMN (tùy chỉnh theo cấu hình)
    $vnp_HashSecret = "5BJRW5ZXGYLDU1OVWN86L0QN6FP67RUW"; // Secret Key (tùy chỉnh)

    $vnp_TxnRef = $order->id; // Sử dụng `id` của order làm mã giao dịch
    $vnp_OrderInfo = "Thanh toán đơn hàng #" . $order->id;
    $vnp_OrderType = "billpayment";
    $vnp_Amount = array_reduce($carts, function ($sum, $cart) {
        return $sum + ($cart['price'] * $cart['qty'] - $cart['pricesale']* $cart['qty']);
    }, 0) * 100; // Tổng tiền (đơn vị VNĐ nhân 100)
    $vnp_Locale = "vn";
    $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

    $inputData = [
        "vnp_Version" => "2.1.0",
        "vnp_TmnCode" => $vnp_TmnCode,
        "vnp_Amount" => $vnp_Amount,
        "vnp_Command" => "pay",
        "vnp_CreateDate" => date('YmdHis'),
        "vnp_CurrCode" => "VND",
        "vnp_IpAddr" => $vnp_IpAddr,
        "vnp_Locale" => $vnp_Locale,
        "vnp_OrderInfo" => $vnp_OrderInfo,
        "vnp_OrderType" => $vnp_OrderType,
        "vnp_ReturnUrl" => $vnp_Returnurl,
        "vnp_TxnRef" => $vnp_TxnRef,
    ];

    ksort($inputData);
    $query = "";
    $hashdata = "";
    foreach ($inputData as $key => $value) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
        $query .= urlencode($key) . "=" . urlencode($value) . '&';
    }
    $hashdata = ltrim($hashdata, '&');
    $vnp_Url = $vnp_Url . "?" . $query;

    if (isset($vnp_HashSecret)) {
        $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
    }

    return redirect()->away($vnp_Url); // Chuyển hướng đến URL VNPay
}

    //show cart
    public function index()
    {
        $list_cart=session('carts',[]);
        $list_product=Product::where('status','=',1)
        ->orderBy('created_at','desc')
        ->paginate(8);
        return view('frontend.cart',compact('list_cart','list_product'));
    }
    //add cart
    public function addcart()
    {
        $qty=$_GET['qty'];
        $productid=$_GET['productid'];
        //mẫu tin
        $product=Product::find($productid);
        //cấu trúc 1 phần tử trong giỏ hàng
        $cartitem=array(
         'id'=>$productid,
         'qty'=>$qty,
         'image'=>$product->image,
         'name'=>$product->name,
         'price'=>$product->price,
         'pricesale'=>$product->pricesale,
        );
        $carts=session('carts',[]);
        if(count($carts)==0)
        {
            //TH1 còn rỗng->thêm mới
            array_push($carts,$cartitem);
        }
        else
        {
        $check=true;
        //TH2 khác rỗng
        foreach($carts as $key=>$cart)
        {
            if(in_array($productid,$cart))
            {
                $carts[$key]['qty']+=$qty;
                $check=false;
                break;
            }
        }
        if($check==true)
        {
            array_push($carts,$cartitem);
        }
    }
    //cập nhật lại giỏ hàng
    session(['carts'=>$carts]);
    echo count(session('carts',[]));
    }

    public function update(Request $request)
   {
     $carts = session('carts',[]);
     $list_qty = $request->qty;
     foreach($carts as $key=>$cart)
     {
        foreach($list_qty as $productid=>$qtyvalue)
        {
            if($carts[$key]['id'] == $productid)
            {
                $carts[$key]['qty'] = $qtyvalue;
            }
        }
     }   
     session(['carts' => $carts]);
     return redirect()->route('cart.index');
    // $list_cart=session('carts',[]);
    // $list_qty=$request->qty;
    // print_r($list_qty);
    }
    
    public function delete($id)
{
    $carts = session('carts',[]);
    foreach($carts as $key=>$cart)
    {
        if($carts[$key]['id']==$id)
        {
            unset($carts[$key]);
        }
    }   
    session(['carts' => $carts]);
    return redirect()->route('cart.index');
}
public function checkout()
{
    $list_cart=session('carts',[]);
    return view('frontend.checkout',compact('list_cart'));
}
public function docheckout(Request $request)
{
    // // Kiểm tra dữ liệu đầu vào
    // $validated = $request->validate([
    //     'name' => 'required|max:255',
    //     'email' => 'required|email',
    //     'phone' => 'required|max:15',
    //     'address' => 'required|max:255',
    // ], [
    //     'name.required' => 'Tên không được để trống.',
    //     'email.required' => 'Email không được để trống.',
    //     'email.email' => 'Email phải đúng định dạng.',
    //     'phone.required' => 'Số điện thoại không được để trống.',
    //     'address.required' => 'Địa chỉ không được để trống.',
    // ]);

    $user = Auth::user();
    $carts = session('carts', []);

    if (count($carts) > 0) {
        $order = new Order();
        $order->user_id = $user->id;
        $order->delivery_name = $request->name;
        $order->delivery_gender = $user->gender;
        $order->delivery_email = $request->email;
        $order->delivery_phone = $request->phone;
        $order->delivery_address = $request->address;
        $order->note = $request->note;
        $order->created_at = date('Y-m-d H:i:s');
        $order->type = 'online';
        $order->status = 2;

        if ($order->save()) {
            foreach ($carts as $cart) {
                $orderdetail = new Orderdetail();
                $orderdetail->order_id = $order->id;
                $orderdetail->product_id = $cart['id'];
                $orderdetail->price = $cart['price'];
                $orderdetail->qty = $cart['qty'];
                $orderdetail->discount = 0;
                $orderdetail->amount = $cart['price'] * $cart['qty'];
                $orderdetail->save();
            }
        }

        // Xóa session carts
        session(['carts' => []]);
    }

    return view('frontend.checkout_message');
}
}
