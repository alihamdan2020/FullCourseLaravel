

<div class="topic">
    <div class="imgTopic">
        <!-- thait is mean if $topic->logo exist then show it, if not
    show the default image -->
    <img src="{{$topic->logo ? asset('storage/' .$topic->logo) : asset('/images/no-image.png')}}" alt="" srcset="">
    </div>

<div class="topicContent">
<h3  style="text-transform: capitalize">
<a href="/listings/{{$topic->id}}">{{$topic['title']}}</a>
</h3>
<h2  style="text-transform: capitalize">
<a href="/listings/{{$topic->id}}">{{$topic['company']}}</a>
</h2>
<!-- <p  style="text-transform: capitalize">{{$topic['description']}}</p> -->
<x-tagsList :listOfTags='$topic->tag' />
<p><span><i class="fa-solid fa-location-dot"></i></span> {{$topic->location}}</p>
</div>
</div>