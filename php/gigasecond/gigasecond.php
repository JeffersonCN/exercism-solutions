<?php

function from($date) {
    $newDate = clone $date;
    return $newDate->add(new DateInterval('PT1000000000S'));
}