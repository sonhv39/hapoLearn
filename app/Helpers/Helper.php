<?php
    if (!function_exists('limitString')) {
        function limitString($string, $limit) {
            $rsString = $string;
            if (strlen($string) > $limit) {
                $rsString = substr($string, 0, $limit - 3) . "...";
            }
            return $rsString;
        }
    }
?>