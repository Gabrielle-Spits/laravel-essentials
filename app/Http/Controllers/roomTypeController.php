<?php

namespace App\Http\Controllers;

use App\Models\roomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
class roomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Cache::get('key');
        return view('roomTypes.index')->with('roomTypes', RoomType::paginate());
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\roomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function show(roomType $roomType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\roomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function edit(roomType $roomType)
    {
        return view('roomTypes.edit')->with('roomType',$roomType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\roomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, roomType $roomType)
    {
        $roomType->picture = Storage::putFile('public', $request->file('picture'));
        $roomType->save();
        return redirect()->action([roomTypeController::class, 'index']);      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\roomType  $roomType
     * @return \Illuminate\Http\Response
     */
    public function destroy(roomType $roomType)
    {
        //
    }
}
