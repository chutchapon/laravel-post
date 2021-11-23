<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // $todolists = Todolist::orderBy('id', 'asc')->paginate(5);
        // $data = [
        //     'todolists' => $todolists,
        // ];

        // return view('welcome', $data);
        return view('welcome');
    }

    public function create()
    {
        return view('create');
    }

    // public function store(Request $request)
    // {
    //     $todolist = new todolist(); //INSERT
    //     $todolist->title = $request->title;
    //     $todolist->status = 0;
    //     $todolist->save();
    //     return redirect('/');
    // }

    // public function edit($todolist_id)
    // {
    //     $todolist = Todolist::find($todolist_id);

    //     $data = [
    //         'todolist' => $todolist,
    //     ];
    //     return view('edit', $data);
    // }

    // public function update(Request $request)
    // {
    //     $todolist = Todolist::find($request->id);
    //     $todolist->title = $request->title;
    //     $todolist->status = 1;
    //     $todolist->save();
    //     return redirect('/');
    // }


    // public function delete($id)
    // {
    //     $todolist = Todolist::find($id);
    //     $todolist->delete();
    //     return redirect('/');
    // }
}
