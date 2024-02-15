
@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between">
        <h1>Liste Users</h1>

    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>
                    <p>{{ $user->name }}</p>
                </td>
                <td>
                    <p class="fw-normal">{{ $user->email }}</p>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
