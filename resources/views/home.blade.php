@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-success">Edit</a>
                        <a class="btn btn-info">Publish</a>
                        <a class="btn btn-primary">View</a>
                        <a class="btn btn-denger">Delete</a>
                        <a class="btn btn-success">SEO</a>
                        <a class="btn btn-info">Manager</a>
                        <a class="btn btn-primary">Account</a>
                        <a class="btn btn-denger">Editor</a>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
