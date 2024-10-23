<?php

declare(strict_types = 1);
function pre($value){
    echo "<pre>";
    echo '<br>';
    print_r($value);
    echo '</br>';
    echo "<pre>";
}