<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\LocationUpdated;

class LiveTrackingController extends Controller
{
    public function showLocation()
    {
        return view('live-tracking');
    }

    public function updateLocation(Request $request)
    {
        broadcast(new LocationUpdated(
            $request->user_id,
            $request->lat,
            $request->lng
        ));

        return response()->json(['status' => 'ok']);
    }
}

