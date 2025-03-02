@extends('layouts.admin')
@section('title','- Thành viên')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý tất cả thành viên</h1>
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
              <a href="{{route('admin.user.create')}}" class="btn btn-success">Thêm
                <i class="fas fa-plus"></i>
            </a>
            <a href="{{route('admin.user.trash')}}" class="btn btn-danger">Thùng rác
                <i class="fas fa-trash"></i>
            </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="text-center" style="width:30px">#</th>
                    <th class="text-center" style="width:100px">Hình</th>
                    <th>Tên người dùng</th>
                    <th>Username</th>
                    {{-- <th style="width:50px">Password</th> --}}
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Quyền</th>
                    <th class="text-center" style="width:220px">Chức năng</th>
                    <th class="text-center" style="width:30px">ID</th>
                </tr>
            </thead>
            <tbody>
              @foreach($list as $row)
              <tr>
                @php
                        $args=['id'=>$row->id];
                    @endphp
                    <td class="text-center" style="width:30px"><input type="checkbox" value="1" name="checkId[]"></td>
                    <td class="text-center" style="width:100px"><img src="{{asset('images/users/'.$row->image)}}"  class="img img-fluid" alt="{{$row->image}}"></td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->username}}</td>
                    {{-- <td style="width:10px">{{$row->password}}</td> --}}
                    <td>{{$row->phone}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->roles}}</td>
                    <td class="text-center" style="width:220px">
                      @if ($row->status==1)
                      <a href="{{route('admin.user.status', $args)}}" class='btn btn-success'>
                        <i class="fas fa-toggle-on"></i>
                    </a>
                      @else
                      <a href="{{route('admin.user.status', $args)}}" class='btn btn-danger'>
                        <i class="fas fa-toggle-off"></i>
                    </a>
                      @endif
                        <a href="{{route('admin.user.show', $args)}}" class='btn btn-info'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{route('admin.user.edit', $args)}}" class='btn btn-primary'>
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{route('admin.user.delete', $args)}}" class='btn btn-danger'>
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                    <td class="text-center" style="width:30px">{{$row->id}}</td>
              </tr>
              @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
          {{ $list->links('pagination::bootstrap-4') }}
      </div>
        </div>
      </div>
  </section>
  @endsection

