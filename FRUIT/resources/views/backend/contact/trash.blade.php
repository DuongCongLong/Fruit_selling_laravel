@extends('layouts.admin')
@section('title','- Thùng rác liên hệ')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Thùng rác liên hệ</h1>
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
                <a href="{{route('admin.contact.index')}}" class="btn btn-info"><i class="fa fa-arrow-left"></i>Về danh sách    
                </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="text-center" style="width:30px">#</th>
                    <th>Tên người liên hệ</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Tiêu đề</th>
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
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->phone}}</td>
                    <td>{{$row->title}}</td>
                    <td class="text-center" style="width:220px">
                        <a href="{{route('admin.contact.show', $args)}}" class='btn btn-info'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{route('admin.contact.restore', $args)}}" class='btn btn-primary'>
                            <i class="fas fa-undo"></i>
                        </a>
                        <form action="{{route('admin.contact.destroy', $args)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" name="delete" type="submit">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                    <td class="text-center" style="width:30px">{{$row->id}}</td>
                  </tr>
                  @endforeach
            </tbody>
        </table>
        </div>
  </section>
  @endsection

