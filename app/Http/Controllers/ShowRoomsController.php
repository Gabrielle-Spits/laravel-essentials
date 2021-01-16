<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room; 
use Illuminate\Http\UploadFile;
use Illuminate\Support\Facades\Storage;


class ShowRoomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , $roomType = null)
    {
       $rooms = Room::byType($roomType)->get();
       return view('rooms.index', ['rooms' => $rooms]);
    }
}
