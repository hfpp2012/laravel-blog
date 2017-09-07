@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>{{ $users->total() }} total users</h3>
            <b>In this page {{ $users->count() }} users</b>
            <ul class='list-group'>
                @forelse($users as $user)
                    <li class='list-group-item' style="margin-top: 20px;">
                        <span>{{ $user->name }}</span>
                        <span class="pull-right clearfix">
                            Joined ({{ $user->created_at->diffForHumans() }})
                        </span>
                        <button class='btn btn-xs btn-primary'>Follow</button>
                    </li>
                @empty
                    <li>No users available</li>
                @endforelse
            </ul>
            {{ $users->links() }}
        </div>
    </div>
@endsection

