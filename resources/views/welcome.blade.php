@extends('layouts.app')


@section('content')
    <h1 class="display-3 text-center">Laravel home page</h1>

    <div class="row">
        <div class="col">
            <h1 class="display-3 text-center">Hello:@if(auth()->check()){{Auth::user()->username}}@else{{'Please sign in'}}@endif</h1>
        </div>
    </div>

@endsection