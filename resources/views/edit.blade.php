
@extends('layout')

@section('content')
<div class="addJob">
    <h1>update existing listing</h1>
    <form action="/listings/update/{{$onetopic->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="inputs">
            <label for="company">company name</label>
            <input type="text" name="company" id="" value="{{$onetopic['company']}}">
            @error('company')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div class="inputs">
            <label for="title">title</label>
            <input type="text" name="title" id="" 
            value="{{$onetopic['title']}}">
            @error('title')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div class="inputs">
            <label for="location">job location</label>
            <input type="text" name="location" id=""
             value="{{$onetopic['location']}}">
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
            value="{{$onetopic['email']}}">
            @error('email')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div class="inputs">
            <label for="website">Website</label>
            <input type="text" name="website" id=""
            value="{{$onetopic['website']}}">
            @error('website')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        <div class="inputs">
            <label for="tag">tag</label>
            <input type="text" name="tag" id=""
            value="{{$onetopic['tag']}}">
            @error('tag')
            <p style="color:red">{{$message}}</p>
            @enderror
        </div>
        
        <div class="inputs">
            <label for="description">job description</label>
            <textarea name="description" id="" rows="4" cols="50">{{$onetopic->description}}
            </textarea>
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
        <div class="input">
        <img style="margin:0 auto;width:200px"
        src="{{$onetopic->logo ? asset('storage/' .$onetopic->logo) : asset('/images/no-image.png')}}" alt="" srcset="">
        </div>

        <div class="inputs">
         <x-button textValue='submit' classValue="btn" />
        </div>


    </form>
</div>

@endsection