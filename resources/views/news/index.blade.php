@extends('layouts.pages')
@section('content')
  
 <h1>news</h1>
     @if( count($news) > 0 )
        @foreach($news as $news)
            <div class="card">
                <div class="row">
                    {{-- <div class="col-md-4">
                    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    </div> --}}
                    <div class="col-md-8">
                    <h3><a href="{{$news-> topiclink}}">{{$news-> topic}}</a></h3>
                    <h3>{!!$news->body!!}</h3>
                    
                        <small>Written at {{$news -> created_at}}</small>
                    </div>
  
                </div>

           
            </div>
        @endforeach

        @else
    @endif 


@endsection