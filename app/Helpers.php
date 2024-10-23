<?php

declare(strict_types = 1);
function formatDollerAmount(float $amount) : string {
    $isNegative = $amount < 0;
    return ($isNegative ? '-': ''). '$'. number_format(abs($amount), 2);
}

function formatDate($date): string{
    return date("M j Y", strtotime($date));
}