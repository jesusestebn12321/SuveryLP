<?php

namespace SuveryLP\Http\Controllers;
use Illuminate\Support\Str as Str;

use SuveryLP\Email;
use SuveryLP\Gender;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    
    public function index()
    {
        //
        $email= Email::all();
        $gender= Gender::all();
        return view('Email.index',compact('email','gender'));
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {   
        $request['slug']=str_slug($request->name.$request->email.$request->id.rand());
        $email=Email::create($request->only('email','name','lastname','password','brith','status_id','gender_id','slug'));
        return back()->with('success','Exito');
    }

   
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SuveryLP\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SuveryLP\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SuveryLP\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        //
    }/**
     * Remove the specified resource from storage.
     *
     * @param  \SuveryLP\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function rechazada($slug){
        $email=Email::where('slug','=',$slug)->firstOrFail();
        $email->status_id=9;
        $email->save();
        $message='Se cambiado el status del usuario';
        return back()->with('message',$message);
    }
     public function uso($slug){
        $email=Email::where('slug','=',$slug)->firstOrFail();
        $email->status_id=8;
        $email->save();
        $message='Se cambiado el status del usuario';
        return back()->with('message',$message);
    }
}
