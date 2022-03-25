@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">User</li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12">

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Attendance Chart -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ion ion-clipboard mr-1"></i>
                                User Profile
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <form action="{{ route('profile.update', $user->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf @method('PUT')
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name', $user->name) }}">
                                </div>
                                <div class="form-group">
                                    <label for="">e-Mail</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email', $user->email) }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Photo</label>
                                            <input type="file" name="image" class="form-control-file">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        @if ($user->photo)
                                            <img src="{{ asset('/storage/profile/' . $user->photo) }}" alt=""
                                                height="100">
                                        @endif
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
