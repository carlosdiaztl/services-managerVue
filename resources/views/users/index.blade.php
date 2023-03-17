@extends('layouts.app')
@section('content')
    <h1> Usuarios </h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }} </th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="d-flex">
                        <a class="btn bnt-link" href="{{ route('users.edit', $user) }}">Edit</a>
                        <a class="btn bnt-link" href="">Delete</a>
                        <a class="btn bnt-link" href="">Details </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('users.create') }}" class="btn btn-success">Create new </a>
@endsection
