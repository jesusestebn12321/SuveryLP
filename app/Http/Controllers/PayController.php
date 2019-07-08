<?php

namespace SuveryLP\Http\Controllers;

use SuveryLP\Pay;
use SuveryLP\Person;
use Illuminate\Http\Request;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pay=Pay::all();
        $person=Person::all();
        return view('pay.index',compact('pay','person'));
    }
    public function store(Request $request){
        // dd($request);
        $pay= Pay::create($request->only('GC','pedido','valor','person_id','status_id'));
        $message='exito al crear un nuevo pay';
        return redirect()->route('Pays.index')->with('message',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \SuveryLP\Pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function editStatu($id){
        $pay= Pay::find($id);
        $pay->status_id=6;
        $pay->save();
        $message='Success cambiar el status ';
        return redirect()->route('Pays.index')->with('message',$message);  

    }
    public function editStatu5($id){
        $pay= Pay::findOrFail($id);
        $pay->status_id=5;
        $pay->save();
        $message='Success cambiar el status ';
        return redirect()->route('Pays.index')->with('message',$message);  

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \SuveryLP\Pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function edit(Pay $pay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SuveryLP\Pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slug $slug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SuveryLP\Pay  $pay
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug){
        $pay=Pay::findOrFail($id);
        $pay->delete();
        return redirect()->route('Pays.index')->with('message',$message);  
    }
}
