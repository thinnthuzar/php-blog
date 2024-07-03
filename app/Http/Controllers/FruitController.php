<?php

namespace App\Http\Controllers;
use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('index',compact ('posts'));
        // return view('index',[
        //     'posts'=>Post::all()
        // ]);
    }
    public function create(){
        return view('create');
    }
    public function show(Request $request){
        $post=new Fruit();
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();
        return redirect()->route('post.index');

    }
    public function result($id){
       $post =Post::find($id);
       return view('result',compact('post'));
    }
    public function destroy($id){
        $post =Post::find($id);
        $post->delete();
        return redirect()->route('post.index');
    }
    public function edit($id){
        $post =Post::find($id);
        return view('edit',compact('post'));
    }
    public function update(Request $request,$id){
        $post =Post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->update();
        return redirect()->route('post.index')->with('status','Post edit is success');
    }
 }
