@extends('backend.master')
@section('title', 'Book')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-user"></i>
        {{ trans('tran.book') }}</div>
    <div class="card-body">
        <hr/>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>{{ trans('tran.id') }}</th>
                        <th>{{ trans('tran.author') }}</th>
                        <th>{{ trans('tran.title') }}</th>
                        <th>{{ trans('tran.mature') }}</th>
                        <th>{{ trans('tran.status') }}</th>
                        <th>{{ trans('tran.views') }}</th>
                        <th>{{ trans('tran.completed') }}</th>
                        <th>{{ trans('tran.recommended') }}</th>
                        <th>{{ trans('tran.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{!! $book->id !!}</td>
                        <td>{!! $book->user->full_name !!}</td>
                        <td><a class="btn btn-light" data-toggle="tooltip" data-placement="right" title="{{ trans('tran.tip_detail') }}" href="{{ route('bookdetail') }}">{!! $book->title !!}</a></td>
                        <td>{!! ($book->is_mature > 0) ? 'no' : 'yes' !!}</td>
                        <td>{!! ($book->status > 0) ? 'no' : 'yes' !!}</td>
                        <td>{!! $book->views !!}</td>
                        <td>{!! ($book->is_completed > 0) ? 'no' : 'yes' !!}</td>
                        <td>{!! ($book->is_recommended > 0) ? 'no' : 'yes' !!}</td>
                        <td class="text-center"><a class="btn btn-secondary" href="{{ route('bookinfo', ['id' => $book->id]) }}"><i class="fas fa-info-circle"></i> {{ trans('tran.information') }}</a>
                        <a class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i>{{ trans('tran.delete') }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
