<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    function home()
    {
       // $title="Todo | Home";
       // return view('home', ['title' =>$title]);

       $todos = Todo::all();

      //  dd($todos);

       return view('home',['todo'=>$todos]);
    }

    function store(Request $request)
    {
      $validatedData= $request->validate([
           'title'=>'required|max:124'
       ]);
       
       Todo::create($validatedData);
      //  $tod=new Todo();
     //$tod->title=$request['title'];
       // $tod->save();
        return redirect('/');
        //return back();
        //return redirect(route('home'));
    }

    function update(Todo $id)
    {
       $todo=$id;
        // $todo=Todo::findOrFail($id);
      // if(!$todo) return abort(404);
      return view('update',['todo'=>$todo]);
        //return view('update',compact('todo');
    }
    function edit( Request $request,Todo $id)
    {
        $validatedData= $request->validate([
            'title'=>'required|max:124'
        ]);
      
        
      // $id->title=$validatedData['title'];
      // dd($validatedData,$todo->title);
       // $id->save();
        //dd($validatedData);
       $id->update($validatedData);
       return redirect('/');
    }
       
    function delete(Todo $id)
    {
      $id->delete();
      return back();
    }
}
