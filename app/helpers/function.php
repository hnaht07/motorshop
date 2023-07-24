<?php
function toSlug($str)
{
    $str = str_replace(' ', '-', $str);
    return $str;
}
function reSlug($str)
{
    $str = str_replace('-', ' ', $str);
    return $str;
}    
?>
