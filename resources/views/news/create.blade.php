@extends('layouts.admin')
@section('content')
  
<div class="card container col-md-9">
    <div class="card-header">Create news</div>
    <div class="card-body">
        <div class="container col-md-9">
            
            <form action="{{ route('news.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group"><label for="exampleFormControlInput1"><strong>Topic :</strong></label><input class="form-control" id="exampleFormControlInput1" type="text" name="topic" placeholder="Topic" required></div>
                <div class="form-group"><label for="exampleFormControlInput1"><strong>TopicLink :</strong></label><input class="form-control" id="exampleFormControlInput1" type="text" name="topiclink" placeholder="topiclink" ></div>
                <div class="form-group">
                    <label><strong>Body :</strong></label>
                    <textarea class="ckeditor form-control" name="body" required></textarea>
                </div>
        
                <div class="form-group"><label for="exampleFormControlInput1"><strong>ReadmoreLink :</strong></label><input class="form-control" id="exampleFormControlInput1" type="text" name="readmorelink" placeholder="Readmorelink" required></div>
                
                <div class="form-group"><label for="exampleFormControlInput1"><strong>Imagelink :</strong></label><input class="form-control" id="exampleFormControlInput1" type="text"  name="imagelink" placeholder="Imagelink" required></div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
            </form>
             
        
        </div>   
    </div>
</div>
 
 

@endsection