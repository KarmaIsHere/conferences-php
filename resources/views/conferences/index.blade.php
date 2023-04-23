@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-3">Conference List <i class="fa-solid fa-list"></i></h1>
        <div style="overflow-x:auto;">
            <table class="table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($conferences as $conference)
                    <tr>
                        <td>{{ $conference->title }}</td>
                        <td>{{ $conference->date }}</td>
                        <td>{{ $conference->address }}</td>
                        <td>
                            <a href="{{ route('conferences.show', $conference) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('conferences.destroy', $conference) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center mt-4">
            @guest
                <a href="{{ route('login') }}" class="btn btn-primary">Log in to create a conference</a>
            @else
                <a href="{{ route('conferences.create') }}" class="btn btn-primary">Create Conference</a>

            @endguest
        </div>
    </div>
@endsection
