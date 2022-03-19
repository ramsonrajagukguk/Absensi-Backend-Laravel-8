<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Attendence;
use App\Models\user;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class AttendanceChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            ->labels(['Today'])
            ->dataset('In', [Attendence::countAttendance(false)])
            ->dataset('Out', [Attendence::countAttendance(true)])
            ->dataset('Total User', [User::where('is_admin', false)->count()]);
    }
}