<?php

namespace App\Http\Controllers;

use App\Models\Candy;
use Illuminate\Http\Request;
use App\Http\Requests\CandyStoreRequest;
use App\Http\Requests\CandyUpdateRequest;

class CandyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candies = Candy::all();
        return view("candy.index", compact("candies"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("candy.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandyStoreRequest $request)
    {
        $candy = new Candy();
        $candy->name = $request->name;
        $candy->size = $request->size;
        $candy->price = $request->price;
        $candy->quantity = $request->quantity;
        $candy->save();
        return redirect()->route('candy.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candy = Candy::findOrFail($id);
        return view('candy.detail', compact('candy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candy = Candy::findOrFail($id);
        return view('candy.edit', compact('candy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CandyUpdateRequest $request, $id)
    {
        $candy = Candy::findOrFail($id);
        $candy->name = $request->name;
        $candy->size = $request->size;
        $candy->price = $request->price;
        $candy->quantity = $request->quantity;
        $candy->update();
        return redirect()->route('candy.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candy = Candy::findOrFail($id);
        if ($candy) {
            $candy->delete();
        }
        return redirect()->route('candy.home');
    }
}
