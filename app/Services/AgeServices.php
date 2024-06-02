<?php

namespace App\Services;

class AgeServices
{
    public function calculateAgeFromDates($startDate, $endDate)
{
    $start = new \DateTime($startDate);
    $end = new \DateTime($endDate);
    $interval = $start->diff($end);

    $years = $interval->y;
    $months = $interval->m;
    $days = $interval->d;
    $hours = $interval->h;
    $minutes = $interval->i;
    $seconds = $interval->s;

    // 计算总月数、天数、小时数、分钟数、秒数和周数
    $totalMonths = ($years * 12) + $months;
    $totalDays = $interval->days;
    $totalWeeks = floor($totalDays / 7);
    $remainingDays = $totalDays % 7; // 计算完整周后的剩余天数
    $totalHours = $totalDays * 24 + $hours;
    $totalMinutes = $totalHours * 60 + $minutes;
    $totalSeconds = $totalMinutes * 60 + $seconds;

    return [
        'years' => $years,
        'months' => $months,
        'days' => $days,
        'hours' => $hours,
        'minutes' => $minutes,
        'seconds' => $seconds,
        'totalMonths' => $totalMonths,
        'totalDays' => $totalDays,
        'totalWeeks' => $totalWeeks,
        'remainingDays' => $remainingDays, // 新增：剩余天数
        'totalHours' => $totalHours,
        'totalMinutes' => $totalMinutes,
        'totalSeconds' => $totalSeconds,
    ];
}
}