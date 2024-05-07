@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-success" href="/users/create">Create user</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-row-dashed table-row-gray-300 gy-7">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800">
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>joined at</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->role->role_name }}</td>
                                        <td>{{ $user->created_at->diffforhumans() }}</td>
                                        <td>
                                            <a href="/users/{{ $user->id }}/edit" class="btn btn-icon btn-light-primary">
                                                <i class="ki-duotone ki-pencil fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <a href="/users/{{ $user->id }}/delete?confirm=true" class="btn btn-icon btn-light-danger">
                                                <i class="ki-duotone ki-trash fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>

                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end card body-->
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    @endsection
