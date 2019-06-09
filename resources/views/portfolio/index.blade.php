@extends('pages')
@section('content')
{{-- здесь должны находиться категории вместе с изображением категории, категория - ссылка ведет к фото
    которые к ней относятся --}}
    <div class="inner cover">    
            <div class="col">
    <ul class="card-columns">
        @foreach ($category as $c)
            <li class="card">
                    <img class="img-fluid" src="{{asset('/storage/'.$c->path)}}" alt=" ">
                <a class="links" href="portfolio/{{$c->id}}">
                    {{$c->title}}</a>
            </li>
        @endforeach
    </ul> 
    {{ $category->links() }}
            </div>
</div>
 @endsection