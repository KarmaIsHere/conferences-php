@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="p-3">
                    <h3 class="text-center mb-3">Conference Details</h3>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <p>{{ $conference['title'] }}</p>
                    </div>
                    <div class="form-group">
                        <label for="content">Description:</label>
                        <p>{{ $conference['content'] }}</p>
                    </div>
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <p>{{ $conference['date'] }}</p>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <p>{{ $conference['address'] }}</p>
                    </div>
                    <div class="form-group text-center">
                        <a href="{{ route('conferences.index') }}" class="btn btn-secondary">Go to the main page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
