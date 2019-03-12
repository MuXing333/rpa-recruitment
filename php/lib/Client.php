<?php
/**
 * Created by PhpStorm.
 * User: EdwinXing
 * Date: 12/3/19
 * Time: 7:56 PM
 */

namespace MyGreeter;

// set time zone => People's Republic of China
date_default_timezone_set('PRC');

class Client
{
    // property declaration
    private $current_time;

    public function __construct($current_time)
    {
        $this->current_time = $current_time;

    }

    // method declaration
    public function getGreeting()
    {
        // set default border time 12Am, 12 PM, 6 PM
        $border_12_AM = strtotime(date('00:00:00'));

        $border_12_PM = strtotime(date('12:00:00'));

        $border_6_PM = strtotime(date('18:00:00'));

        // depends the time range to return the expect result
        if ($this->current_time >= $border_12_AM && $this->current_time < $border_12_PM) {
            return "Good morning \n";
        } elseif ($this->current_time >= $border_12_PM && $this->current_time < $border_6_PM) {
            return "Good afternoon \n";
        } else {
            return "Good evening \n";
        }
    }

}

// convert current time to millisecond
$current_time = strtotime(date('H:i:s'));


// call the class to get the result
$test = new Client($current_time);

// print out the result
echo $test->getGreeting();