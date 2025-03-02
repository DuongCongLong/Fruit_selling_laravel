@extends('layouts.admin')
@section('title','- Thùng rác bài viết')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý thùng rác</h1>
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
                <a href="{{route('admin.post.index')}}" class="btn btn-info"><i class="fa fa-arrow-left"></i>Về danh sách    
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
                    <th style="width:250px">Tiêu đề bài viết</th>
                    <th>Slug</th>
                    <th>Kiểu</th>
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
                <td class="text-center" style="width:100px"><img src="{{asset('images/posts/'.$row->image)}}"  class="img img-fluid" alt="{{$row->image}}"></td>
                    <td>{{$row->title}}</td>
                    <td>{{$row->slug}}</td>
                    <td>{{$row->type}}</td>
                    <td class="text-center" style="width:220px">
                        <a href="{{route('admin.post.show', $args)}}" class='btn btn-info'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{route('admin.post.restore', $args)}}" class='btn btn-primary'>
                            <i class="fas fa-undo"></i>
                        </a>
                        <form action="{{route('admin.post.destroy', $args)}}" method="post">
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


