<?php

if (!function_exists('dinero')) {
    function dinero($s)
    {
        return number_format($s, 2, ',', ' ') . ' €';
    }
}

if (!function_exists('truncar')) {
    function truncar($s, $long = 20)
    {
        if (mb_strlen($s) > $long) {
            return mb_substr($s, 0, $long) . '...';
        }

        return $s;
    }
}

if (!function_exists('order_dir_arrow')) {
    function order_dir_arrow($order, $order_dir)
    {
        return $order == false ? '' : ($order_dir == 'desc' ? '↑' : '↓');
    }
}

if (!function_exists('order_dir')) {
    function order_dir($order, $order_dir)
    {
        return $order == false ? 'asc' : ($order_dir == 'asc' ? 'desc' : 'asc');
    }
}

if (!function_exists('fecha')) {
    function fecha(&$fecha): string
    {
        return $fecha->setTimeZone('Europe/Madrid')
            ->isoFormat('LLL');
    }
}
