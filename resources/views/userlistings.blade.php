@extends('layout')
@section('content')
@foreach($test as $topic)
<x-card :topic="$topic" />
@endforeach
@endsection