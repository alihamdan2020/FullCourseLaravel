@extends('layout')

@section('content')
@include('partials/_hero')
@include('partials/_search')

<!--
<h1 style="text-transform: capitalize">this is normal php writing method without using blade engine even if your file is .blade.php ypu can write in this way</h1>
<h1  style="text-transform: capitalize"><?php echo $heading ?></h1>
<h2  style="text-transform: capitalize">The topics</h2>
<?php foreach($topics as $topic) { ?>
<div class="topic">
<h3  style="text-transform: capitalize">
<a href="#"><?php echo $topic['id'] . '-' . $topic['title'] ?></a>
</h3>
<img src="/images/no-image.png" alt="" srcset="">
    <div class="topicContent">
    <p  style="text-transform: capitalize"><?php echo $topic['description']?></p>
    <ul>
        <?php foreach(explode(',',$topic->tag) as $singleTag) { ?>
        <li><a href="#"><?php echo $singleTag ?></a></li>
        <?php } ?>
    </ul>
    <p><span><i class="fa-solid fa-location-dot"></i></span> <?php echo $topic->location ?></p>
    </div>
<?php } ?>
</div>
<h2>count of listinings are : <span style="color:red"><?php echo count($topics) ?></span> </h2>
        -->

<hr>
<h1 style="text-transform: capitalize">this is blade writing mode</h1>
<h1  style="text-transform: capitalize">{{$heading}}</h1>

<div class="topics">
@foreach($topics as $topic)
<!-- //this is anothe way where your props is an array -->
<x-card :topic=$topic />
@endforeach
</div>



<div class="pagination" style="margin-bottom:10px">
    <p>{{$topics->links()}}</p>
</div>


@include('partials._footer')
<x-flash flashValue="{{Session('message')}}" />
@endsection




