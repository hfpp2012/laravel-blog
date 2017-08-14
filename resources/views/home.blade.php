@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h2>{{ Auth::user()->name }}</h2>
                    <h2>{{ $myname }}</h2>
                    <h2>{{ $age }}</h2>
                    <h2>{{ $auth->name }}</h2>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
