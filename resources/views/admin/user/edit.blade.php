@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">  Редактирование пользователя</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Пользователи</a></li>
              <li class="breadcrumb-item active">Редактирование информации пользователя</li>
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
            
              <form action="{{route('admin.user.update', $user->id)}}" method="POST" class="w-25">
                @csrf
                @method('PATCH')
                <div class="form-group">
                  <input type="text" class="form-control" name="name"  value="{{ $user->name }}">
                </div>
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $user->email }}">
                </div>
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                  <label>Выберите роль пользователя</label>
                  <select name="role" class="form-control">
                    @foreach ($roles as $id => $role)
                    <option value="{{$id}}"
                      {{$id == $user->role ? 'selected' : ''}}>
                      {{$role}}
                    </option>
                    @endforeach
               
                  </select>
                  @error('role')
                  <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group">
                 <input type="hidden" name="user_id" value="{{$user->id}}">
                </div>
                <input type="submit" class="btn btn-primary" value="Изменить">
              </form>
            </div>
            
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection