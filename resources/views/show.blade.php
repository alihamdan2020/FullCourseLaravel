@extends('layout')

@section('content')

<div class="oneTopic">

<!-- //this is anothe way where your props is an array -->
<img src="{{$onetopic->logo ? asset('storage/'. $onetopic->logo) : asset('/images/no-image.png')}}" alt="" srcset="" class="onetopicImag">
<p>{{$onetopic->title}}</p>
<p>{{$onetopic->company}}</p>
<p><x-tagsList :listOfTags='$onetopic->tag' /></p>
<p><i class="fa-solid fa-location-dot"></i> {{$onetopic->location}}</p>
<hr STYLE="margin-block: 10PX";>
<div>
<H1 style="margin-block:10px;font-weight:bold">JOB DESCRIPTION</H1>
<p style="margin-block:10px;font-weight:bold">{{$onetopic->description}}</p>
</div>
<a href="#" style="--bg:red" class="btnShowView">
<i class="fa-regular fa-envelope"></i>Contact Employer</a>
<a href="#" style="--bg:black" class="btnShowView">
<i class="fa-solid fa-globe"></i>visit website</a>

</div>
<div class="editSection" style="background-color: #eee;border-radius:5px;padding:10px 5px">
<i class="fa-solid fa-pencil"></i>
<a href="/listings/{{$onetopic->id}}/edit">edit</a>

<i class="fa-solid fa-trash"></i>
<a href="/listings/destroy/{{$onetopic->id}}">delete</a>
</div>


@endsection




