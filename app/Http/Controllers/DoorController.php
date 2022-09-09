<?php

namespace App\Http\Controllers;

use App\Models\Door;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoorController extends Controller
{
   use UploadImageTrait;
    public function index()
    {
        $doors = Door::all();
        return view('doors',compact('doors'));
    }

    public function create()
    {

        return view('door.createDoor');
    }


    public function store(Request $request)
    {
            $path = $this->uploadImage($request,'doorimage');

         Door::create([
           'title'=>$request->title,
            'path'=>$path
        ]);
            return redirect('/doors');
    }


    public function show($id)
    {
        $door = DB::table('doors')->where('id', $id)->first();

        return view('door.doorDetails' ,compact('door'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Door  $door
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Door  $door
     * @return \Illuminate\Http\Response
     */
    public function destroy(Door $door)
    {
        //
    }
}
