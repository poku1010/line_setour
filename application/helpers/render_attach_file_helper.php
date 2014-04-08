<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('make_image_html')){
    function make_image_html($url, $class_name){
        $html = "<img src='$url' class='$class_name' />";
        return $html;
    }
}

if ( ! function_exists('is_image')){
    function is_image($url){
        if(preg_match("/\.(png|jpeg|jpg|gif|bmp)$/i", $url)) {
            return TRUE;
        } 
        else {
            return FALSE;
        }
    }
}

if ( ! function_exists('make_non_image_html')){
    function make_non_image_html($url, $class_name){
        if (empty($url)){
            return '';
        }
      
        $html = "<a href='$url' class='$class_name' target='_blank' />開啟附加檔案</a>";
        return $html;
    }
}
