@extends('layouts.admin')
@section('title','Chi tiết liên hệ')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Chi tiết liên hệ</h1>
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
                    <a class="btn btn-sm btn-info" href="{{ route('admin.contact.index')}}">
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
                        <td>{{ $contact->id }}</td>
                    </tr>
                    <tr>
                        <td>User_id</td>
                        <td>{{ $contact->user_id }}</td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{ $contact->name }}</td>
                    </tr>
                    
                    <tr>
                        <td>Email</td>
                        <td>{{ $contact->email }}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{ $contact->phone }}</td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>{{ $contact->title }}</td>
                    </tr>
                    <tr>
                        <td>Content</td>
                        <td>{{ $contact->content }}</td>
                    </tr>
                    <tr>
                        <td>Replay_id</td>
                        <td>{{ $contact->replay_id }}</td>
                    </tr>
                    <tr>
                        <td>Created_at</td>
                        <td>{{ $contact->created_at }}</td>
                    </tr>
                    <tr>
                        <td>Updated_at</td>
                        <td>{{ $contact->updated_at }}</td>
                    </tr>
                    <tr>
                        <td>Updated_by</td>
                        <td>{{ $contact->updated_by }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{ $contact->status }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

