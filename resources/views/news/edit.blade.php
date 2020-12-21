@extends('layouts.admin')
@section('content')

<div class="card container col-md-9">
    <div class="card-header">Create news</div>
    <div class="card-body">
        <div class="container col-md-9">
            
            <form action="{{ route('news.update', $news->id) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group"><label for="exampleFormControlInput1"><strong>Topic :</strong></label><input class="form-control" value="{{ $news->topic }}"id="exampleFormControlInput1" type="text" name="topic" placeholder="Topic" required></div>
                <div class="form-group"><label for="exampleFormControlInput1"><strong>TopicLink :</strong></label><input class="form-control" value="{{ $news->topiclink }}" id="exampleFormControlInput1" type="text" name="topiclink" placeholder="topiclink" ></div>
                <div class="form-group">
                    <label><strong>Body :</strong></label>
                    <textarea class="ckeditor form-control"  name="body" value="{!!$news->body!!}" required></textarea>
                </div>
        
                <div class="form-group"><label for="exampleFormControlInput1"><strong>ReadmoreLink :</strong></label><input class="form-control" value="{{ $news->readmorelink }}" id="exampleFormControlInput1" type="text" name="readmorelink" placeholder="Readmorelink" required></div>
                
                <div class="form-group"><label for="exampleFormControlInput1"><strong>Imagelink :</strong></label><input class="form-control" value="{{ $news->imagelink }}" id="exampleFormControlInput1" type="text"  name="imagelink" placeholder="Imagelink" required></div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
            </form>
             
        
        </div>   
    </div>
</div>
@endsection