<?php
use Illuminate\Support\Str;

if (!function_exists('route_class')) {
    /**
     * 将当前路由转换成css类名称.
     *
     * @return mixed
     */
    function route_class()
    {
        return str_replace('.', '-', Route::currentRouteName());
    }
}

if (!function_exists('sku_code')) {
    /**
     * 生成一个12位的随机唯一数
     *
     * @return string
     */
    function sku_code()
    {
        $sku_code = strtotime("now").rand(100,999);
            return $sku_code;
    }
}

if (!function_exists('make_excerpt')) {
    /**
     * 获得话题摘要，默认截取200字.
     *
     * @param $value
     * @param int $length
     *
     * @return string
     */
    function make_excerpt($value, $length = 200)
    {
        $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));

        return Str::limit($excerpt, $length);
    }
}

if (!function_exists('carbon')) {
    /**
     * Carbon helper.
     *
     * @param $time
     * @param $tz
     *
     * @return Carbon\Carbon
     */
    function carbon($time = null, $tz = null)
    {
        return new \Carbon\Carbon($time, $tz);
    }
}

if (!function_exists('str_replace_first')) {
    /**
     * 查找 $search 在 $subject 中出现的情况并返回 2 个元素的数组，用 $replace 替换
     *
     * @param string $search 需要查找的字符串
     * @param string $replace 被替换的字符串
     * @param string $subject 被查找的字符串
     * @return string
     */
    function str_replace_first($search, $replace, $subject)
    {
        return implode($replace, explode($search, $subject, 2));
    }
}

if (!function_exists('thousand_split')) {
    /**
     * 将数值转为千分位，如  12345678  转为  12,345,678
     * @param int $param 输入的数值，建议为int
     * @return bool|string 返回 字符串 "12,345,678"
     */
    function thousand_split($param = 0)
    {
        $param = (string)$param;
        $length = strlen($param);
        $length_integer = intval($length / 3);
        $remainder = $length % 3;
        $str_head = substr($param, 0, $remainder);
        $str = $str_head;
        if ($length_integer >= 1) {
            foreach (range(1, $length_integer) as $value) {
                $split_char = ',';
                if (($value == 1) && ($remainder == 0)) {
                    $split_char = '';
                }
                $str .= $split_char . substr($param, 3 * ($value - 1) + $remainder, 3);
            }
        }
        return $str;
    }
}

/**
 * desktop helper
 *
 * @param
 * @param
 *
 * @return true\false
 */

if (!function_exists('desktop')) {
    function desktop()
    {
        return new \WhichBrowser\Parser(getallheaders());
    }
}
