<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\SpeedometerToggled;

class OverlayController extends Controller
{
    public function toggleSpeedometer() {
        event(new SpeedometerToggled());
        return "Slår speedometeret til og fra";
    }
}
