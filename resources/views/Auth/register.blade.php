@extends('layouts.app')

@section('content')
<form action="{{route('register')}}" method="POST" class="container">
    @csrf
    <h3>Please Register Here</h3>
    <div class="py-2">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your name">
    </div>
    <div class="py-2">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter your username">
    </div>
    <div class="py-2">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your email">
    </div>
    <div class="py-2">
        <label for="name">Password</label>
        <input class="" type="password" name="password" placeholder="Enter your password" value="">
        <div class="py-2">
            <label for="name">Password</label>
            <input class="" type="password" name="password" placeholder="Re-enter your password" value="">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>

</form>
@endsection