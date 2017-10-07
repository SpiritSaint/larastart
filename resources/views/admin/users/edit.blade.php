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

                        <div class="form-group">
                            <h6>Name</h6>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                        </div>

                        <hr>

                        <div class="form-group">
                            <h6>Email</h6>
                            <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                        </div>

                        <hr>

                        <div class="form-group">
                            <h6>Administrator</h6>
                            <select name="is_admin" id="is_admin" class="form-control">
                                <option value="1" @if($user->is_admin) selected @endif>Enabled</option>
                                <option value="0" @if(!$user->is_admin) selected @endif>Disabled</option>
                            </select>
                        </div>

                    </div>

                    <div class="panel-footer">
                        <a href="{{ route('admin.users.show', $user) }}" class="btn btn-default">Back</a>
                        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-success">Update</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
