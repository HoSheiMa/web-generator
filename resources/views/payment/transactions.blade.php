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
                                    <th>ID</th>
                                    <th>PAID</th>
                                    <th>CURRENCY</th>
                                    <th>OPEN PROJECTS</th>
                                    <th>AT</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->id }}</td>
                                        <td>{{ $transaction->paid }}</td>
                                        <td>{{ $transaction->currency }}</td>
                                        <td>{{ $transaction->projects }}</td>
                                        <td>{{ $transaction->created_at->diffforhumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end card body-->
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    @endsection
