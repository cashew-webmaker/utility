<?php

namespace Cashewdigital\DateService;

use Carbon\Carbon;

class DateService
{
    public function generateDateRange(Carbon $start_date, Carbon $end_date)
    {
        $dates = [];

        for($date = $start_date; $date->lessThanOrEqualTo($end_date->endOfDay()); $date->addDay()) {
            $dates[] = Carbon::parse($date);
        }

        return $dates;
    }

    public function generateDateRangeWeekdayOnly(Carbon $start_date, Carbon $end_date)
    {
        $dates = [];

        for($date = $start_date; $date->lessThanOrEqualTo($end_date->endOfDay()); $date->addDay()) {

            if ($date->isWeekday()) {
                $dates[] = Carbon::parse($date);
            }
        }

        return $dates;
    }

    public function generateDateRangeWeekDayOnlyInDimDate(Carbon $start_date, Carbon $end_date)
    {
        $startDimDate = DimDate::where('date', $start_date->toDateString())->first();
        $endDimDate = DimDate::where('date', $end_date->toDateString())->first();

        $dates = [];

        for($x = $startDimDate->id; $x < $endDimDate->id; $x ++) {

            $date = Carbon::parse(DimDate::find($x)->date);

            if ($date->isWeekday()) {
                $dates[] = $x;
            }
        }

        return $dates;

    }


}