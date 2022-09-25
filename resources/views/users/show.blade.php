@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" readonly value="{{ $user->name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="text" readonly value="{{ $user->email }}" class="form-control">
        </div>
    </div>
@endsection
