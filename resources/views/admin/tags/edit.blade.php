@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Cập nhật tag</h1>
@stop
@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div align="right">
    <a href="{{ route('admin.tags.index') }}" class="btn btn-default">Back</a>
</div>
<br>
<div class="card">
    <div class="card-body">
        <form method="post" action="{{ route('admin.tags.update', $tag->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Tên tag</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{ $tag->name }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Bài viết</label>
                <div class="col-sm-10">
                    <select name="article_category_id" class="form-control">
                        @foreach ($posts as $post)
                        <option value="{{ $post->id }}"
                            @if ($post->id == $tag->post_id)
                                selected="selected"
                            @endif
                        >{{ $post->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group text-center">
                <input type="submit" name="add" class="btn btn-primary input-lg" value="Cập nhật" />
            </div>
        </form>
    </div>
</div>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
