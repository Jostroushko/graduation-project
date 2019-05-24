@extends('pages')
@section('content')
{{-- здесь должны находиться категории вместе с изображением категории, категория - ссылка ведет к фото
    которые к ней относятся --}}
    <div class="inner cover">    
            <div class="col-lg-4 col-md-4 col-sm-12 desc">
    <ul class="list-group">
        @foreach ($category as $c)
            <li class="list-group-item">
                    <img class="img-fluid" src="{{asset('/storage/'.$c->path)}}" alt=" ">
                <a class="links" href="portfolio/{{$c->id}}">
                    {{$c->title}}</a>
            </li>
        @endforeach
    </ul> 
            </div>
</div>
 @endsection