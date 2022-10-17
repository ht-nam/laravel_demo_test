@extends('layout.app')

@section('title', 'Home Page')

@section('content')
    <h1 class="text-center py-5">Students management</h1>
    <div class="text-center m-5">
        <a href="{{ URL::to('/students') }}" class="btn btn-outline-primary">Student list</a>
    </div>
    <div class="text-center m-5">
        <a href="{{ URL::to('/students/add') }}" class="btn btn-outline-primary">Add new student</a>
    </div>
@endsection
