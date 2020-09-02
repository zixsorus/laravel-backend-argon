@extends('layouts.app', ['title' => __('Contacts')])


@section('content')
@include('users.partials.header')

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Contacts</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{route('contacts.create')}} " class="btn btn-primary">Add Contact</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">First name</th>
                                <th scope="col">First name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Job title</th>
                                <th scope="col">City</th>
                                <th scope="col">Country</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>


                            @forelse($contacts as $row)
                            <tr>
                                <th scope="row">
                                    {{$loop->iteration}}
                                </th>
                                <td>{{$row->first_name}}</td>
                                <td>{{$row->last_name}}</td>
                                <td>
                                    <a href="mailto:{{$row->email}} ">{{$row->email}} </a>
                                </td>
                                <td>{{$row->job_title}}</td>
                                <td>{{$row->city}}</td>
                                <td>{{$row->country}}</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="{{route('contacts.edit',$row->id)}}">Edit </a>

                                            <button data-id="{{$row->id}}"
                                                onclick="deleteConfirmation({{$row->id}})">Delete</button>
                                            
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th scope="row" colspan="7" class="text-center">{{__('No Data')}} </th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
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

<script type="text/javascript">
    function deleteConfirmation(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.value) {
                Swal.fire([
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500
                ])
            }
            })
    }
</script>

@endsection