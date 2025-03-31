@extends('layout')

@section('title', 'Registration Success! | LAB9')

@section('content')
    <h1>Registration Successful!</h1>
    <p>Name: {{ $data['fname'] . ' ' . $data['lname']}}</p>
    <p>Email: {{ $data['email'] }}</p>
    <a href="{{ route('register.form') }}" class="btn btn-primary">Register again</a>

@endsection