@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                @include('admin._partials.sidebar')
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Users</div>

                    <div class="panel-body">

                        @include('admin.users._partials.details')

                    </div>

                    <div class="panel-footer">
                        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
