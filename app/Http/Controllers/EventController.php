<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function __construct(){
        //$this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events=Event::orderBy('id', 'desc')
            ->take(3)
            ->get();
        if( Auth::guard('admin')->check()==false){
            return redirect('/')->with('events',$events)->with('error', 'You dont have permission to access this page');
        }else {
            $posts = Event::orderBy('id', 'desc')->paginate(16);
            return view('events.index')->with('posts', $posts);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//validate
        $this->validate($request,[
            'title'=>'required',
            'details'=>'required',
            'location'=>'required',
            'eventdate'=>'required',
            'cover_image'=>'image|nullable|max:5999'
        ]);
        //Handle ile upload
        if ($request->hasFile('cover_image')){
            $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
            //Get jus file name
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get ext
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //upload image
            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }else{
            $fileNameToStore='default.jpg';
        }
        $post=new Event;
        $post->title=$request->input('title');
        $post->details=$request->input('details');
        $post->location=$request->input('location');
        $post->eventdate=$request->input('eventdate');
        $post->author='admin';

        $post->image=$fileNameToStore;
        $post->save();
        return redirect('/Events')->with('success','Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts= Event::find($id);
        return view('events.show')->with('post',$posts);
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
        //
        $posts=Event::find($id);


            return view('events.edit')->with('post',$posts);



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
        //
        //validate
        $this->validate($request,[
            'title'=>'required',
            'eventdate'=>'required',
            'details'=>'required'
        ]);

        //Handle ile upload
        if ($request->hasFile('cover_image')){
            $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
            //Get jus file name
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get ext
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //upload image
            $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }
        $post=Event::find($id);
        $post->title=$request->input('title');
        $post->author='admin';
        $post->eventdate=$request->input('eventdate');
        if ($request->hasFile('cover_image')){
            $post->image=$fileNameToStore;
        }
        $post->save();
        return redirect('/Events')->with('success','Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Event::find($id);
        //
        if ($post->image!='noimage.jpg'){
            Storage::delete('public/cover_images/'.$post->image);
        }
        $post->delete();
        return redirect('/Events')->with('success','Event removed');
    }
}
