@extends('layout')

@section('title', 'Register | LAB9')

@section('content')
    <h1>Simple validation form</h1>
    <p>This project is for validating user input utilizing Laravel’s Request object, the application efficiently collects
        and validates user input, providing clear error messages when validation fails.</p>

    <h2>Register Now</h2>
    <p>To get started, please visit the registration page.</p>
    <a href="{{ route('register.form') }}" class="btn btn-primary">Go to Registration</a>
@endsection