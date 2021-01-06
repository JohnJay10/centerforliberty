<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth',['except'=> ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(5);
        return view('news.index',['news'=> $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
             'topic'=> 'required',
             'body' => 'required',
             'topiclink' => 'required',
             'readmorelink' => 'required',
             'imagelink' => 'required',
              'cover_image'=>'image|nullable|max:1999'

         ]);


            if($request->hasFile('pictures')){
                //get file name with extension
                $filenameWithExt = $request->file('pictures')->getClientOriginalName();
                //get file name
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //get just extension
                $extension = $request->file('pictures')->getClientOriginalExtension();
                //file name to store
                $fileNameToStore = $filename .'_'.time().'.'.$extension;
                //Upload image
                $path = $request->file('pictures')->storeAs('public/pictures', $fileNameToStore);
            }else{
                $fileNameToStore= 'noimage.jpeg';
            }

          $news = new News;
          $news->user_id = auth()->user()->id;
          $news ->topic =$request->input('topic');
           $news->body = $request->input('body');
           $news->topiclink = $request->input('topiclink');
           $news->readmorelink = $request->input('readmorelink');
           $news->imagelink = $request->input('imagelink');
            $news->pictures = $fileNameToStore;
           $news-> save();
           return redirect('/news/create')->with ('success','News Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $news = News::find($id);
        // if (auth()->user()->id !== $news->user_id){
        //     // return redirect('/posts',['error','Unauthorized Page']);
        //  return redirect('/news')->with('error','Unauthorized Page');
        // }
         return view('news.edit',  ['news'=> $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
             'topic'=> 'required',
             'body' => 'required',
             'topiclink' => 'required',
             'readmorelink' => 'required',
             'imagelink' => 'required',
              'cover_image'=>'image|nullable|max:1999'

         ]);

          if($request->hasFile('pictures')){
                //get file name with extension
                $filenameWithExt = $request->file('pictures')->getClientOriginalName();
                //get file name
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //get just extension
                $extension = $request->file('pictures')->getClientOriginalExtension();
                //file name to store
                $fileNameToStore = $filename .'_'.time().'.'.$extension;
                //Upload image
                $path = $request->file('pictures')->storeAs('public/pictures', $fileNameToStore);
            }

         $news =  News::find($id);
         $news->user_id = auth()->user()->id;
         $news ->topic =$request->input('topic');
          $news->body = $request->input('body');
          $news->topiclink = $request->input('topiclink');
          $news->readmorelink = $request->input('readmorelink');
          $news->imagelink = $request->input('imagelink');

          if($request->hasFile('pictures')){
          $news->pictures = $fileNameToStore;
          }

          $news-> save();
          return redirect('/home')->with ('success','News Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news =  News::find($id);
        $news-> delete();

        if($news->pictures != 'noimage.png'){
        Storage::delete('public/pictures/' . $news-> pictures);
        }

        return redirect('/home')->with('success', 'News Successfully Deleted');
    }
}
