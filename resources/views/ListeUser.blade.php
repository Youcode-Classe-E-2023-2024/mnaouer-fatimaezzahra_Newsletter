
@extends('layouts.app')

@section('content')

    <h1>Liste Users</h1>

    <div class="d-flex justify-content-between">

    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>

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

                <td>
                    <a href="{{route('selectRole', ['user' => $user])}}"
                       class="btn btn-link btn-sm btn-rounded">Assign Role</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
