<?php

if (!function_exists('dateFormat')) {
    /**
     * Get the date format from the configuration.
     *
     * @return string
     */
    function dateFormat()
    {
        return config('constants.date_format');
    }
}

if (!function_exists('timeFormat')) {
    /**
     * Get the time format from the configuration.
     *
     * @return string
     */
    function timeFormat()
    {
        return config('constants.time_format');
    }
}