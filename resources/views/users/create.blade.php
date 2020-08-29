@extends('layouts.app', ['title' => __('User Management')])

@section('content')
@include('users.partials.header')
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-1">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Users Management</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="/user" class="btn btn-danger">Black</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        @csrf @method('post')
                        <h6 class="heading-small text-muted mb-4">User Information</h6>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label for="" class="form-control-label">Name</label>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-control-label">Email</label>
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-control-label">Password</label>
                                <input type="text" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-control-label">Confirm Password</label>
                                <input type="text" class="form-control" placeholder="Confirm Password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success w-100">Save</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">

                    </nav>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth')
</div>
@endsection