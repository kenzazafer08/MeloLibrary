@extends('layouts.dashboard')

@section('content')
<div class="p-4 sm:ml-64 mt-20">
<h1>Users</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="">Edit</a>
                    <form action="" method="POST">
                        
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection