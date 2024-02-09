@extends('layouts.app')

@section('content')

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <p>Hello {{ Auth::user()->email }}</p>
    </div>

@endsection
