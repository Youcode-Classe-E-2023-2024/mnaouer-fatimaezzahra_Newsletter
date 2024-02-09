@extends('layouts.app')

@section('content')

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                <strong>{{ session('error') }}</strong>
            </span>
        @endif

        <h1>Hello {{ Auth::user()->email }}!</h1>
    </div>

@endsection
