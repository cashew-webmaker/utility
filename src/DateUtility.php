<?php

namespace Cashewdigital\Utility;

use Carbon\Carbon;

class DateUtility
{
    public function generateDateRange($startDate, $endDate)
    {
        $start_date = Carbon::parse($startDate);
        $end_date = Carbon::parse($endDate);

        $dates = [];

        for($date = $start_date; $date->lessThanOrEqualTo($end_date->endOfDay()); $date->addDay()) {
            $dates[] = Carbon::parse($date);
        }

        return $dates;
    }

    public function generateDateRangeString($start_date, $end_date)
    {
        $dates = $this->generateDateRange($start_date, $end_date);
        $dateStrings = [];
        foreach ($dates as $date) {
            $dateStrings[] = $date->toDateString();
        }
        return $dateStrings;
    }

    public function generateDateRangeWeekdayOnly($startDate, $endDate)
    {
        $start_date = Carbon::parse($startDate);
        $end_date = Carbon::parse($endDate);

        $dates = [];

        for($date = $start_date; $date->lessThanOrEqualTo($end_date->endOfDay()); $date->addDay()) {

            if ($date->isWeekday()) {
                $dates[] = Carbon::parse($date);
            }
        }

        return $dates;
    }

}