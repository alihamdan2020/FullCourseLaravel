@extends('layout')

@section('content')

<div class="createUser" >
    <h1>LOG IN</h1>
<form method="POST" action="/users/authenticate" >
    @csrf
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
        <button>log in</button>
    </div>
</form>
</div>
@endsection