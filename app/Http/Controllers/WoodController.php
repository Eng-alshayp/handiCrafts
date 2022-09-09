<?php

namespace App\Http\Controllers;

use App\Models\Wood;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WoodController extends Controller
{
    use UploadImageTrait;

    public function index()
    {
        $woods = Wood::all();
        return view('woods',compact('woods'));
    }


    public function create()
    {
        return view('wood.createWood');
    }


    public function store(Request $request)
    {
        $path = $this->uploadImage($request,'woodimage');
        Wood::create([
           'title'=>$request->title,
           'path'=>$path
        ]);
        return redirect('/woods');
    }


    public function show($id)
    {
        $wood=DB::table('wood')->where('id',$id)->first();

        return view('wood.woodDetails',compact('wood'));
    }


    public function edit(Wood $wood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wood  $wood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wood $wood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wood  $wood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wood $wood)
    {
        //
    }
}
