<?php
    // echo date('d'); // Day
    // echo date('m'); // month
    // echo date('Y'); // Year
    // echo date('5');

    // echo date('Y/m/d');
    // echo date('m/d/Y');

    // echo date('h'); //hour
    // echo date('i'); //min
    // echo date('s'); // seconds
    // echo date('a'); //AM or PM

    // Set Time Zone
    date_default_timezone_set('America/Chicago');
    // echo date('h:i:sa');

    /*
        Unix timestamp is a long integar containing the number of seconds between the unix epoch and the time specified.
    */

    // $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    // echo $timestamp;

    // echo date('m/d/Y h:i:sa', $timestamp);

    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Months');
    // echo $timestamp2;
    echo date('m/d/Y h:i:sa', $timestamp5);