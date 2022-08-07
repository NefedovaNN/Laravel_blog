@extends('personal.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Понравившиеся посты</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Личный кабинет</a></li>
              <li class="breadcrumb-item active">Понравившиеся посты</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <div class="col-10 ">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                   
                    <tr>
                      <th>ID</th>
                      <th>Название</th>
                      <th colspan="2" class="text-center">Действия</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($posts as $post)
                   <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td><a href="{{route('post.show', $post->id)}}"><i class="far fa-eye"></i></a></td>
                  
                    <td>
                      <form action="{{route('personal.liked.delete', $post->id)}}" method = "POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn "><i class="fas fa-trash text-danger"></i></button>
                      </form>
                    </td>
                  </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
        </div>
        
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection