@extends('backend.master')
@section('title', 'Book')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-book"></i>
        {{ trans('tran.chapter') }}</div>
    <div class="card-body">
        <hr />
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>{{ trans('tran.id') }}</th>
                        <th>{{ trans('tran.book') }}</th>
                        <th>{{ trans('tran.title') }}</th>
                        <th>Slug</th>
                        <th>{{ trans('tran.status') }}</th>
                        <th>{{ trans('tran.completed') }}</th>
                        <th>{{ trans('tran.vote') }}</th>
                        <th>{{ trans('tran.create_at') }}</th>
                        <th>{{ trans('tran.update_at') }}</th>
                        <th>{{ trans('tran.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Numagician</td>
                        <td><a class="btn btn-light" data-toggle="tooltip" data-placement="right" title="click here to show chapter detail"
                                href="{{ route('chapter') }}">Làm ảo thuật với trí nhớ</a></td>
                        <td>Slug</td>
                        <td>Status</td>
                        <td>Completed</td>
                        <td>Vote</td>
                        <td>01/24/2019</td>
                        <td>01/24/2019</td>
                        <td><a class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i>{{ trans('tran.delete') }}</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Minh triết trong ăn uống của phương đông</th>
                        <td><a class="btn btn-light" data-toggle="tooltip" data-placement="right" title="click here to show chapter detail"
                                href="#">Hiểu về âm dương</a></td>
                        <td>Slug</td>
                        <td>Status</td>
                        <td>Completed</td>
                        <td>Vote</td>
                        <td>Create At</td>
                        <td>Update At</td>
                        <td><a class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i>{{ trans('tran.delete') }}</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
