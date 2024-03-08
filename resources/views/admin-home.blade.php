@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Home</div>

                <div class="card-body">
                    <p>Welcome to admin dashboard, {{ Auth::user()->name }}</p>
                    <p>Is Admin: {{ Auth::user()->is_admin ? 'Yes' : 'No' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection