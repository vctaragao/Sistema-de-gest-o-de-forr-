<?php

namespace App\Helpers;

class Functions
{
    /**
     * Add timestamp to data before insering into database.
     */
    public static function addTimestamp($data)
    {
        return array_merge($data, ['created_at' => \DB::raw('CURRENT_TIMESTAMP'), 'updated_at' => \DB::raw('CURRENT_TIMESTAMP')]);
    }
    
    /**
     * BRL currency format
     *
     * @return string
     */
    public static function formatCurrency($value)
    {
        $fmt = new \NumberFormatter('pt_BR', \NumberFormatter::CURRENCY);
        return $fmt->formatCurrency($value, 'BRL');
    }
}