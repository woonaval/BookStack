@extends('exports.layout')

@section('title', $entity->name)

@section('content')
    <h1 style="font-size: 4.8em">{{$entity->name}}</h1>

    <p>{{ $entity->description }}</p>

    @if(count($pages) > 0)
        <ul class="contents">
            @foreach($pages as $page)
                <li><a href="#page-{{$page->id}}">{{ $page->name }}</a></li>
            @endforeach
        </ul>
    @endif

    @foreach($pages as $page)
        <div class="page-break"></div>
        <h1 id="page-{{$page->id}}">{{ $page->name }}</h1>
        {!! $page->html !!}
    @endforeach
@endsection