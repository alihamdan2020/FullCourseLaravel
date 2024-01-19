    <ul>
        @foreach($listings as $listing)
            <li><a href="#">{{$listing->title}}</a></li>
        @endforeach
    </ul>

