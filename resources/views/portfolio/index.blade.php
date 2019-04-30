@extends('pages')
@section('content')
{{-- здесь должны находиться категории вместе с изображением категории, категория - ссылка ведет к фото
    которые к ней относятся --}}
    <ul class="list-group">
        @foreach ($category as $c)
            <li class="list-group-item">
                <a href="portfolio/{{$c->id}}">
                    {{$c->title}}</a>
            </li>
        @endforeach
    </ul>
 @endsection