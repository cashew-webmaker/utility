<?php

namespace Cashewdigital;

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

}