@extends('admin.pages.page')
@section('content')
@include('admin.nav')
<div class="col-10 adm-content adm">
  @if (session()->has('success-del'))
  <div class="alert alert-denger">{{ session('success-del') }}</div>
@endif  
  <div class="col desc">
    @foreach ($category as $p)
     <div class="row"> 
         <div class="col-lg-12 col-md-12 col-sm-12 desc">
                       <h3><a href="{{URL::to('admin/category/'.$p->id)}}">{{$p->title}}</a></h3>
                </div>
                 </div>
  <hr>
  @endforeach
  {{ $category->links() }}
  </div>
 </div>

</div>
@endsection