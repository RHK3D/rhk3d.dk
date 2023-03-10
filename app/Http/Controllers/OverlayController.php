<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\SpeedometerToggled;
use App\Events\OverlayReloadExecuted;

class OverlayController extends Controller
{
    public function toggleSpeedometer() {
        event(new SpeedometerToggled());
        return "Slår speedometeret til og fra";
    }

    public function reloadOverlay() {
        event(new OverlayReloadExecuted());
        return "Genindlæser overlayet";
    }
}
