<?php

namespace App\Helpers;

use Carbon\Carbon;
use App\Models\Schedule;

class ScheduleHelper {
    protected $schedule;
    public function __construct(Schedule $schedule)
    {
        $this->schedule = $schedule;
    }

    public function getAvailableDays($doctorId)
    {
        $currentDate = Carbon::now('Asia/Kathmandu');
        $currentTime = $currentDate->format('H:i A');
        $currentDay = $currentDate->format('l');

        $schedules = $this->schedule->where('doctor_id', $doctorId)->where('status', 'available')->get();
        if (!$schedules) {
            return null;
        }

        $daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $currentDayIndex = array_search($currentDay, $daysOfWeek);

        $nextAvailableDays = [];

        foreach ($schedules as $schedule) {
            $dayIndex = array_search($schedule->days, $daysOfWeek);

            if ($dayIndex >= $currentDayIndex) {
                if ($dayIndex == $currentDayIndex && $currentTime >= $schedule->from) {
                    continue;
                }
                // Calculating the date of the next occurrence of the schedule day within this week
                $daysUntilNext = $dayIndex - $currentDayIndex;
                $nextOccurrenceDate = $currentDate->copy()->addDays($daysUntilNext);

                $totalQuota = $schedule->total_quota;
                $totalAppCount = $schedule->appointments->count();

                $nextAvailableDays[] = [
                    'id' => $schedule->id,
                    'date' => $nextOccurrenceDate->format('Y-m-d'),
                    'day' => $nextOccurrenceDate->format('l'),
                    'timeInterval' => $schedule->from . ' - ' . $schedule->to,
                    'totalQuota' => $totalQuota,
                    'totalAppCount' => $totalAppCount,
                ];
            }
        }

        return $nextAvailableDays;
    }
}
