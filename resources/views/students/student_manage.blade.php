@extends('layout.app')

@section('title', 'Student Management')

@section('content')
    <h1 class="text-center py-5">Students management</h1>

    <div class="text-center m-5">
        <a href="{{ URL::to('/students/add') }}" class="btn btn-outline-primary">Add new student</a>
    </div>
    <div class="container">
        <table class="table">
            <?php $index = 1; ?>
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $std)
                    <tr>
                        <th scope="row">{{ $index++ }}</th>
                        <td>{!! $std->id !!}</td>
                        <td>{!! $std->fullname !!}</td>
                        <td><?php echo explode(' ', $std->birthday)[0]; ?></td>
                        <td>
                            <a href="students/{!! $std->id !!}/edit" class="btn btn-outline-primary">Edit</a>
                            <a href="students/{!! $std->id !!}/delete" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
