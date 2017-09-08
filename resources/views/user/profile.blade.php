@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe8W2ur7n_tTz1jE--CSLNEiDmN56hMyqIw-k-Z5Xt4AN34SZP" alt="">

                <h1>{{ $user->name }}</h1>
                <h5>{{ $user->email }}</h5>
                <h5>{{ $user->dob }}</h5>
            </div>
        </div>
    </div>
</div>
@endsection
