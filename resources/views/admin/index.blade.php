@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('admin._partials.sidebar')
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Administration</div>
                    <div class="panel-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

