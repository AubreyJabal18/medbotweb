<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\User;
use App\Models\Reading;
use Illuminate\Http\Request;

class FetchController extends Controller
{
    public function getQrCode(Request $request){
        $path = '../public/storage/qrcodes/'.$request->id.'.png';
        return response()->download($path);
    }

    public function getReadingTrends(Request $request){
        if($request->by == 'weekly'){
            $year = substr($request->value, 0, 4);
            $week = substr($request->value, 6, 2);
            $dates = $this->getStartAndEndDateFromWeek($week, $year);
            $readings = Reading::where('user_id', $request->id)
                ->whereBetween('created_at', [$dates['start'], $dates['end']])
                ->latest()
                ->get()
                ->groupBy(function($item){
                    return Carbon::parse($item->created_at)->format('Y-m-d');
                });
            $readings_by_date = [];
            foreach($readings as $key => $value){
                $readings_by_date[$key] = $value[0];
            }
            $period = CarbonPeriod::create($dates['start'], $dates['end']);
            $formatted_readings = [];
            foreach($period as $date){
                $key = $date->format('Y-m-d');
                $formatted_readings[$key] = array_key_exists($key, $readings_by_date) ? $formatted_readings[$key] = $readings_by_date[$key] : null;
            }
            return response()->json([
                'readings' => $formatted_readings
            ]);
        }
        else if($request->by=='monthly'){
            $year = substr($request->value, 0, 4);
            $month = substr($request->value, 5, 2);
            $readings = Reading::where('user_id', $request->id)
                ->whereMonth('created_at', $month)
                ->whereYear('created_at', $year)
                ->latest()
                ->get()
                ->groupBy(function($item){
                    return Carbon::parse($item->created_at)->format('Y-m-d');
                });
            $readings_by_date = [];
            foreach($readings as $key => $value){
                $readings_by_date[$key] = $value[0];
            }
            $dates = $this->getStartAndEndDateFromMonth($month, $year);
            $period = CarbonPeriod::create($dates['start'], $dates['end']);
            $formatted_readings = [];
            foreach($period as $date){
                $key = $date->format('Y-m-d');
                $formatted_readings[$key] = array_key_exists($key, $readings_by_date) ? $formatted_readings[$key] = $readings_by_date[$key] : null;
            }
            return response()->json([
                'readings' => $formatted_readings
            ]);
        }
        else if($request->by=='yearly'){
            $year = $request->value;
            $readings = Reading::where('user_id', $request->id)
                ->whereYear('created_at', $year)
                ->latest()
                ->get()
                ->groupBy(function($item){
                    return Carbon::parse($item->created_at)->format('M');
                });
            $readings_by_month = [];
            foreach($readings as $key => $value){
                $readings_by_month[$key] = $value[0];
            }
            $formatted_readings = [];
            $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            foreach($months as $month){
                $formatted_readings[$month] = array_key_exists($month, $readings_by_month) ? $readings_by_month[$month] : null; 
            }
            return response()->json([
                'readings' => $formatted_readings
            ]);
        }
    }

    private function getStartAndEndDateFromWeek($week, $year){
        $date = Carbon::now();
        $date->setISODate($year, $week);
        $dates = [
            'start' => $date->startOfWeek()->toDateString(),
            'end' => $date->endOfWeek()->toDateString()
        ];
        return $dates;
    }

    private function getStartAndEndDateFromMonth($month, $year){
        $date = Carbon::createFromDate($year, $month);
        $dates = [
            'start' => $date->startOfMonth()->toDateString(),
            'end' => $date->endOfMonth()->toDateString()
        ];
        return $dates;
    }

}
