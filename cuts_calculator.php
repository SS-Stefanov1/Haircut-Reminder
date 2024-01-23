<?php
function haircuts($start_date, $wait, $cost) {
    $end   = '2024-12-31';
    $start = new DateTime($start_date);
    $dates = [];

    while ($start <= new DateTimeImmutable($end)) {
        $dates[] = $start -> format('Y-m-d') . PHP_EOL;
        $start -> modify("".+$wait." days");
    }

    return [$dates, $cost * count($dates)];
}
?>