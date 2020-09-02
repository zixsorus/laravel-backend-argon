@extends('layouts.app', ['title' => __('Add Contact')])

@section('content')
@include('users.partials.header')
<div class="container-fluid mt--7">
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-1">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Contacts</h3>
            </div>
            <div class="col-4 text-right">
              <a href="/contacts" class="btn btn-danger">Black</a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <form method="post" action="{{ route('contacts.store') }}">
            @csrf
            <h6 class="heading-small text-muted mb-4">Add Contacts</h6>
            <div class="pl-lg-4">
              <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                <label for="first_name" class="form-control-label">First name</label>
                <input type="text" name="first_name" value="{{ old('first_name') }}"
                  class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}" autofocus required
                  placeholder="First name">

                @if ($errors->has('first_name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('first_name') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                <label for="input-last_name" class="form-control-label">Last name</label>
                <input type="text" name="last_name" value="{{ old('last_name') }}"
                  class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}" required
                  placeholder="Last name">

                @if ($errors->has('last_name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('last_name') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <label for="email" class="form-control-label">Email</label>
                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required
                  placeholder="Email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('job_title') ? ' has-danger' : '' }}">
                <label for="job_title" class="form-control-label">Job title</label>
                <input type="text" name="job_title"
                  class="form-control{{ $errors->has('job_title') ? ' is-invalid' : '' }}" placeholder="Job title">
              </div>
              <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                <label for="input-city" class="form-control-label">City</label>
                <input type="text" name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                  placeholder="City">
              </div>
              <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                <label for="input-country" class="form-control-label">Country</label>
                <input type="text" name="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}"
                  placeholder="Country">
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