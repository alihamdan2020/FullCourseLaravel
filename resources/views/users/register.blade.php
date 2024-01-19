@extends('layout')

@section('content')
<div class="createUser" >
    <h1>sign up for new user</h1>
<form method="POST" action="{{route('signUp')}}" >
    @csrf
    <div class="inputs">
        <label for="name">user name</label>
        <input type="text" for="username" name="name" value="{{old('name')}}">
        @error('name')
        <p style="color:red">
        {{$message}}
        </p>
        @enderror
    </div>
    <div class="inputs">
        <label for="email">email</label>
        <input type="text" for="email" name="email" value="{{old('email')}}">
        @error('email')
        <p style="color:red">
        {{$message}}
        </p>
        @enderror
    </div>
    <div class="inputs">
        <label for="password">password</label>
        <input type="password" for="password" name="password">
        @error('password')
        <p style="color:red">
        {{$message}}
        </p>
        @enderror
    </div>
    <div class="inputs">
        <label for="password_confirmation">confirm password</label>
        <!-- note the second input of password must take this name  -->
        <input type="password" for="password" name="password_confirmation">
        @error('password_confirmation')
        <p style="color:red">
        {{$message}}
        </p>
        @enderror
    </div>
    <div class="inputs">
        <button>sign up</button>
    </div>
</form>
</div>
@endsection