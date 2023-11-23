@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>User Details</h2>

        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <!-- Tambahkan field lain sesuai kebutuhan -->

        <a href="{{ route('users.index') }}" class="btn btn-primary">Back to Users</a>
    </div>
@endsection