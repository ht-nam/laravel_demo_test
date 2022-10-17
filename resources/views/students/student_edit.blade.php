@extends('layout.app')

@section('title', 'Edit')

@section('content')
    <h1 class="text-center py-5">Edit</h1>
    <?php $std = $data[0]; ?>
    <div class="container p-5">
        <form action="" method="post" class="border p-5 mt-2">
            <div class="mb-3">
                <label for="name" class="form-label">Full name</label>
                <input type="text" class="form-control" name='name' id="name" value="{!! $std->fullname !!}"
                    required>
            </div>

            <div class="mb-3">
                <label for="birthday" class="form-label">Birthday (mm-dd-yyyy): </label><br>
                <input type="date" id="birthday" name="dob" value="<?php echo explode(' ', $std->birthday)[0]; ?>" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" name="address" id="address" rows="3">{!! $std->address !!}</textarea>
            </div>



            @csrf
            <div class="col-12">
                <button class="btn btn-primary">Edit student</button>
            </div>
        </form>
    </div>
@endsection
