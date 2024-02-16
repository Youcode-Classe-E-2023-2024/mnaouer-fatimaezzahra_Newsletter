
@extends('layouts.app')

@section('content')

    <h1>Liste Subscriber</h1>
    <div class="d-flex justify-content-between">

        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
            <tr>
                <th>#</th>
{{--                <th>Name</th>--}}
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subscriber as $subscribers)
                <tr>
                    <td>{{ $subscribers->id }}</td>
{{--                    <td>--}}
{{--                        <p>{{ $subscribers->name }}</p>--}}
{{--                    </td>--}}
                    <td>
                        <p class="fw-normal">{{ $subscribers->email }}</p>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

@endsection
