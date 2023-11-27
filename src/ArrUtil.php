<?php
namespace MAZENAN;
/**
 * Created by PhpStorm
 * Author: WangYuFan
 * Date: 2023-11-27
 * Time: 18:30
 */
class ArrUtil
{
    public static function arrayFilter(array $arr, array $fields, bool $canEmpty = false): array
    {

        $arr = array_filter($arr, function ($value, $key) use($fields, $canEmpty) {
            if (!in_array($key, $fields)) {
                return false;
            }
            if ((!$value) && !$canEmpty) {
                return false;
            }
            return true;
        }, ARRAY_FILTER_USE_BOTH);
        return $arr;
    }

}