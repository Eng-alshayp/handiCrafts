<?php

namespace App\Http\Controllers;

use App\Models\Kitchens;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KitchensController extends Controller
{
    use UploadImageTrait;

    public function index()
    {
        $kitchens = Kitchens::all();
        return view('kitchens',compact('kitchens'));
    }


    public function create()
    {
        return view('kitchen.createKitchen');
    }


    public function store(Request $request)
    {
        $path = $this->uploadImage($request,'kitchenimage');

        Kitchens::create([
            'title'=>$request->title,
            'path'=>$path
        ]);
        return redirect('/kitchens');
    }

    public function show($id)
    {
        $kitchen = DB::table('kitchens')->where('id', $id)->first();

        return view('kitchen.kitchenDetails' ,compact('kitchen'));
    }

    public function edit(Kitchens $kitchens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kitchens  $kitchens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kitchens $kitchens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kitchens  $kitchens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kitchens $kitchens)
    {
        //
    }
}
