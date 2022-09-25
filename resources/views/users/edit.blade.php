@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Data</h1>
        <div class="row mb-4">
            <div class="col-md-6">
                @livewire('user-edit', ['user' => $user])
            </div>
        </div>
    </div>
@endsection
