@extends('admin.layouts-admin.app')
@section('content')
    <div class="container">
        <h1>Riyadh Dashboard</h1>
        <p>Welcome, {{ auth()->user()->name }}</p>
    </div>
@endsection
