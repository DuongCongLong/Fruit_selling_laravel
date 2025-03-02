<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchsController extends Controller
{
    public function search(Request $request)
    {
        // Lấy input từ người dùng
        $query = $request->input('query');

        // Kiểm tra xem input 'query' có được nhập hay không
        if (empty($query)) {
            // Trả về với thông báo lỗi nếu không nhập
            return redirect()->back()->with('error', 'Vui lòng nhập từ khóa để tìm kiếm.');
        }

        // Tìm kiếm sản phẩm dựa trên từ khóa
        $list_product = Product::where('Name', 'LIKE', "%$query%")
            ->orWhere('Description', 'LIKE', "%$query%")
            ->orderBy('created_at', 'ASC')
            ->paginate(5);

        // Trả về kết quả tìm kiếm
        return view('frontend.search', compact('list_product'));
    }
}
