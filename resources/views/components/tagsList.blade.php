@props(['listOfTags'])

@php
$tags=explode(',', $listOfTags )
@endphp

<ul STYLE="DISPLAY:FLEX;justify-content:center;gap:10px">
    @foreach($tags as $singleTag)
        <li><a href="/listings/?tag={{$singleTag}}"  class="linksoful">{{$singleTag}}</a></li>
    @endforeach
</ul>