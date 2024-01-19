@extends('layout')

@section('content')
<div class="addJob">
    <h1>add new listing</h1>
    <form action="/listings/store" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="inputs">
            <label for="company">company name</label>
            <input type="text" name="company" id="">
            @error('company')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div class="inputs">
            <label for="title">title</label>
            <input type="text" name="title" id="" 
            value="{{old('title')}}">
            @error('title')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div class="inputs">
            <label for="location">job location</label>
            <input type="text" name="location" id=""
             value="{{old('location')}}">
             <!-- value=old('location') mean when i submit
            and there is some error let say invalid email
            this input remain the old value -->
            @error('location')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div class="inputs">
            <label for="email">contact email</label>
            <input type="text" name="email" id=""
            value="{{old('email')}}">
            @error('email')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div class="inputs">
            <label for="website">Website</label>
            <input type="text" name="website" id=""
            value="{{old('website')}}">
            @error('website')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div class="inputs">
            <label for="tag">tag</label>
            <input type="text" name="tag" id=""
            value="{{old('tag')}}">
            @error('tag')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        
        <div class="inputs">
            <label for="description">job description</label>
            <textarea name="description" id="" rows="4" cols="50"></textarea>
            @error('description')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <div class="inputs">
            <label for="logo">file</label>
            <input type="file" name="logo">
            @error('logo')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>

        <div class="inputs">
         <x-button textValue='submit' classValue="btn" />
        </div>


    </form>
</div>

@endsection