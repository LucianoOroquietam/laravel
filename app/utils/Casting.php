<?php
namespace App\Utils;
use Carbon\Carbon;

class Casting
{
    public static function cast($value, string $type, ?string $format = null)
    {
        switch ($type) {
            case 'datetime':
                return $value ? Carbon::parse($value)->format($format ?? 'd-m-Y') : null;
            case 'boolean':
                return (bool) $value;
            case 'float':
                return (float) $value;
            case 'integer':
                return (int) $value;
            case 'array':
                return is_array($value) ? $value : json_decode($value, true);
            default:
                return $value;
        }
    }
}
