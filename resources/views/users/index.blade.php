@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="mb-4">Belajar Crud dengan Livewire</h1>
        <div class="row mb-4">
            <div class="col-md-6">
                @livewire('user-create')
            </div>
        </div>
        <div>
            @livewire('user-table')
        </div>
    </div>
@endsection
