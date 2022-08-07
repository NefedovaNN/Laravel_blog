@extends('personal.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Комментарии</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Личный кабинет</a></li>
              <li class="breadcrumb-item"><a href="{{route('personal.comment.index')}}">Комментарии</a></li>
              <li class="breadcrumb-item active">{{$comment->message}}</li>
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
          <div class="col-12">
            
            <form action="{{route('personal.comment.update', $comment->id)}}" method="POST" class="w-80">
              @csrf
              @method('PATCH')
              <div class="form-group">
                <textarea class="form-control" name="message" cols="30" rows="3">{{$comment->message}}</textarea>
                
              </div>
              @error('message')
                  <p class="text-danger">Это поле должно быть заполнено!</p>
              @enderror
              <input type="submit" class="btn btn-primary" value="Изменить">
            </form>
          </div>
            <div class="card">
             
              <!-- /.card-header -->
            
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