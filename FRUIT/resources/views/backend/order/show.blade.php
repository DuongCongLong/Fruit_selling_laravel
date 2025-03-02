@extends('layouts.admin')
@section('title','Chi tiết đặt hàng')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Chi tiết đặt hàng</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>  
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12 text-right">
                    <a href="#" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i> Xóa
                    </a>
                    <a class="btn btn-sm btn-info" href="{{ route('admin.order.index')}}">
                        <i class="fa fa-arrow-left"></i> Về danh sách
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center" style="width:30%;">
                            <strong>Tên trường</strong>
                        </th>
                        <th class="text-center" style="width:70%;">Giá trị</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Id</td>
                        <td>{{ $order->id }}</td>
                    </tr>
                    <tr>
                        <td>User_id</td>
                        <td>{{ $order->user_id }}</td>
                    </tr>
                    <tr>
                        <td>Delivery_name</td>
                        <td>{{ $order->delivery_name }}</td>
                    </tr>
                    <tr>
                        <td>Delivery_gender</td>
                        <td>{{ $order->delivery_gender }}</td>
                    </tr>
                    <tr>
                        <td>Delivery_email</td>
                        <td>{{ $order->delivery_email }}</td>
                    </tr>
                    <tr>
                        <td>Delivery_phone</td>
                        <td>{{ $order->delivery_phone }}</td>
                    </tr>
                    <tr>
                        <td>Delivery_address</td>
                        <td>{{ $order->delivery_address }}</td>
                    </tr>
                    <tr>
                        <td>Note</td>
                        <td>{{ $order->note }}</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>{{ $order->type }}</td>
                    </tr>
                    <tr>
                        <td>Created_at</td>
                        <td>{{ $order->created_at }}</td>
                    </tr>
                    <tr>
                        <td>Created_by</td>
                        <td>{{ $order->created_by }}</td>
                    </tr>
                    <tr>
                        <td>Updated_at</td>
                        <td>{{ $order->updated_at }}</td>
                    </tr>
                    <tr>
                        <td>Updated_by</td>
                        <td>{{ $order->updated_by }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{ $order->status }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

