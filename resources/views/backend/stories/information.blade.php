@extends('backend.master')
@section('title', 'Book')
@section('content')
<div class="card-body">
    <div>
        <h1 class="text-success">{{ trans('tran.book_info') }}</h1>
    </div>
    <div>
        {!! Form::open(['method' => 'POST', 'route' => ['adduser']]) !!}
        <div class="form-group row">
            {!! Form::label('bookid', trans('tran.id'), ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-1">
                {!! Form::text('bookid', $book->id, ['class' => 'form-control', 'id' => 'bookid']) !!}
            </div>
            {!! Form::label('report', trans('tran.report'), ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-1">
                {!! Form::text('report', '', ['class' => 'form-control', 'id' => 'report']) !!}
            </div>
            {!! Form::label('chapter', trans('tran.chapter'), ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-1">
                {!! Form::text('chapter', '', ['class' => 'form-control', 'id' => 'chapter']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('image', trans('tran.image'), ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-2">
                <img src="" alt="Image" class="img-thumbnail">
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('author', trans('tran.author'), ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-3">
                {!! Form::text('author', $book->user->full_name, ['class' => 'form-control', 'id' => 'author']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('title', trans('tran.title'), ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-5">
                {!! Form::text('title', $book->title, ['class' => 'form-control', 'id' => 'title']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('slug', 'Slug', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-5">
                {!! Form::text('Slug', $book->slug, ['class' => 'form-control', 'id' => 'slug']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('summary', trans('tran.summary'), ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-6">
                {!! Form::textarea('summary', $book->summary, ['class' => 'form-control', 'id' => 'summary']) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('view', trans('tran.views'), ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-2">
                {!! Form::text('view', $book->views, ['class' => 'form-control', 'id' => 'view']) !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-1"></div>
            <div class="col-md-2 custom-control custom-switch">
                {!! Form::checkbox('mature', null, ($book->is_mature > 0) ? null : 'checked', ['id' => 'mature', 'class' => 'custom-control-input']) !!}
                {!! Form::label('mature', trans('tran.mature'), ['class' => 'custom-control-label']) !!}
            </div>
            <div class="col-md-2 custom-control custom-switch">
                {!! Form::checkbox('status', null, ($book->status > 0) ? null : 'checked', ['id' => 'status', 'class' => 'custom-control-input']) !!}
                {!! Form::label('status', trans('tran.status'), ['class' => 'custom-control-label']) !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-1"></div>
            <div class="col-md-2 custom-control custom-switch">
                {!! Form::checkbox('recommended', null, ($book->is_recommended > 0) ? null : 'checked', ['id' => 'recommended', 'class' => 'custom-control-input']) !!}
                {!! Form::label('recommended', trans('tran.recommended'), ['class' => 'custom-control-label']) !!}
            </div>
            <div class="col-md-2 custom-control custom-switch">
                {!! Form::checkbox('completed', null, ($book->is_completed > 0) ? null : 'checked', ['id' => 'completed', 'class' => 'custom-control-input']) !!}
                {!! Form::label('completed', trans('tran.completed'), ['class' => 'custom-control-label']) !!}
            </div>
        </div>
        <div class="form-group row tag-form">
            {!! Form::label('tag', 'Tag', ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-5">
                <h3>tags</h3>
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('category', trans('tran.category'), ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-3">
                {!! Form::text('category', '', ['class' => 'form-control', 'id' => 'category']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('create-at', trans('tran.create_at'), ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-2">
                {!! Form::date('create-at', $createAt, ['class' => 'form-control', 'id' => 'create-at']) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('update-at', trans('tran.update_at'), ['class' => 'col-md-1 col-form-label text-md-right']) !!}
            <div class="col-md-2">
                {!! Form::date('update-at', $updateAt, ['class' => 'form-control', 'id' => 'update-at']) !!}
            </div>
        </div>
        <div class="for-group row mb-0">
            <div class="col offset-md-1">
                {!! Form::button(trans('tran.save'), ['class' => 'btn btn-primary' ]) !!}
                {!! Form::button(trans('tran.back'), ['class' => 'btn btn-primary' ]) !!}
            </div>
        </div>
    {!! Form::close() !!}
    </div>
</div>
@endsection
