<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * grab youtube id from any article
 * 
 * @return Integer or NULL
 * @author howtomakeaturn
 */

if ( ! function_exists('grab_youtube_id_from_context')){
    function grab_youtube_id_from_context($context){
        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $context, $match)) {
            $video_id = $match[1];
            return $video_id;
        }
        else{
            return NULL;
        }
    }
}
if ( ! function_exists('make_youtube_iframe')){
    function make_youtube_iframe($youtube_id, $width, $height){
        if (empty($youtube_id)){
            throw new Exception('invalid youtube id');
        }
        $result = "<iframe width='$width' height='$height' src='http://www.youtube.com/embed/$youtube_id?autoplay='0' frameborder='0'></iframe>";
        
        return $result;
    }
}

if ( ! function_exists('convert_url_to_a_tag')){
    function convert_url_to_a_tag($content){
        $content =
            preg_replace(
                '~(\s|^)(https?://.+?)(\s|$)~im', 
                '$1<a href="$2" target="_blank">$2</a>$3', 
                $content
            );
        $content = 
            preg_replace(
                '~(\s|^)(www\..+?)(\s|$)~im', 
                '$1<a href="http://$2" target="_blank">$2</a>$3', 
                $content
            );
        return $content;
    }
}
