@extends('admin.layouts-admin.app')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <p>Welcome, {{ auth()->user()->name }}</p>
    </div>
@endsection
