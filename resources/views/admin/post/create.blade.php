@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Добавление поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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

                        <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-25">
                                <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Название поста">
                                @error('title')
                                    <p class="text-danger">Это поле должно быть заполнено!</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="content"> {{old('content')}}</textarea>
                                @error('content')
                                <p class="text-danger">Это поле должно быть заполнено!</p>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                              <label >Добавить превью</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" name="preview_image" class="custom-file-input" >
                                  <label class="custom-file-label">Выберите изображение</label>
                                </div>
                                <div class="input-group-append">
                                  <span class="input-group-text">Загрузка</span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group w-50">
                              <label >Добавить изображение</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" name="main_image" class="custom-file-input" >
                                  <label class="custom-file-label">Выберите изображение</label>
                                </div>
                                <div class="input-group-append">
                                  <span class="input-group-text">Загрузка</span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Добавить">
                            </div>
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
