@extends('layout')

@section('title', 'Register | LAB9')

@section('content')

    <h1>Register</h1>
    <form action="{{ route('register.submit') }}" method="POST">
        @csrf
        {{-- Old('fname') is for prefilling if there are validation errors --}}
        <label for="fname" class="form-label">First Name:</label>
        <input type="text" name="fname" id="fname" class="form-control" value="{{ old('fname') }}" />
        @error('fname')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <label for="lname" class="form-label">Last Name:</label>
        <input type="text" name="lname" id="lname" class="form-control" value="{{ old('lname') }}" />
        @error('lname')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <label for="Kevinpassword" class="form-label">Password:</label>
        <input type="password" name="Kevinpassword" class="form-control" id="Kevinpassword">
        @error('Kevinpassword')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <label for="Kevinpassword_confirmation" class="form-label">Confirm Password:</label>
        <input type="password" name="Kevinpassword_confirmation" id="Kevinpassword_confirmation" class="form-control">
        <button type="submit" class="btn btn-primary mt-3">
            Register
        </button> <br>
    </form>
@endsection