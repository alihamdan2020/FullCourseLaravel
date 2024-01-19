<p>{{$data['title']}}</p>

<ul>
    @foreach($data['section'] as $section)
        <li>{{$section['id']}} - {{$section['sectionTitle']}}</li>

    @endforeach
</ul>
<p>note : if u are using array in this way from route , do not try $data->id, it is error</p>
