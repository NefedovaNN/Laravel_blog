@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Редактирование поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Админка</a></li>
                          <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Посты</a></li>
                            <li class="breadcrumb-item active">Изменение поста</li>
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

                        <form action="{{ route('admin.post.update', $post->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-25">
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}"
                                    placeholder="Название поста">
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="content"> {{ $post->content }}</textarea>
                                @error('content')
                                    <p class="text-danger">Это поле должно быть заполнено!</p>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Добавить главное изображение</label>
                                <div class="w-50 mb-3">
                                    <img src="{{ url('storage/' . $post->main_image) }}" alt="main_image">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="main_image" class="custom-file-input">
                                        <label class="custom-file-label">Выберите изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('main_image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Выберите категорию</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach

                                </select>
                                @error('category_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Тэги</label>
                                <select class="select2" name="tag_ids[]" multiple="multiple"
                                    data-placeholder="Выберите тэги" style="width: 100%;">
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}"
                                            {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }}>
                                            {{ $tag->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('tag_ids')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Обновить">
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
