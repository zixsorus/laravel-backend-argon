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
                    <form action="{{route('user.update')}} " method="post">
                        @csrf @method('put')
                        <h6 class="heading-small text-muted mb-4">User Information</h6>
                        <div class="pl-lg-4">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label for="input-name" class="form-control-label">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    autofocus required placeholder="Name">

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label for="input-email" class="form-control-label">Email</label>
                                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label for="input-password" class="form-control-label">Password</label>
                                <input type="password" name="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required
                                    placeholder="Password">

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="input-password-confirm" class="form-control-label">Confirm Password</label>
                                <input type="password" class="form-control" required name="password_confirmation"
                                    placeholder="Confirm Password">
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