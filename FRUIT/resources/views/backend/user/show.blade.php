@extends('layouts.admin')
@section('title','Chi tiết thành viên')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Chi tiết thành viên</h1>
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
                    <a class="btn btn-sm btn-info" href="{{ route('admin.user.index')}}">
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
                        <td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>{{ $user->username }}</td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>{{ $user->password }}</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>{{ $user->gender }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td>{{ $user->role }}</td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td>{{ $user->image }}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{ $user->address }}</td>
                    </tr>
                    <tr>
                        <td>Remember_token</td>
                        <td>{{ $user->remember_token }}</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>{{ $user->type }}</td>
                    </tr>
                    <tr>
                        <td>Created_by</td>
                        <td>{{ $user->created_by }}</td>
                    </tr>
                    <tr>
                        <td>Updated_at</td>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                    <tr>
                        <td>Updated_by</td>
                        <td>{{ $user->updated_by }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{ $user->status }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection


