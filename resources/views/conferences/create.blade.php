@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-items-center flex-column">
        <h1 class="text-center mb-3">Conference Creation Form <i class="fa-solid fa-square-plus"></i></h1>
        <form action="{{route('conferences.store')}}" method="POST" class="text-center">
            @csrf
            @include('conferences.partials.form')
            <div><input type="submit" value="Create" class="btn btn-success"></div>
        </form>
    </div>
@endsection
