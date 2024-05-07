@extends('layouts.app')

@section('content')
    @livewire('studio', [
        'project' => $project,
    ])
@endsection
