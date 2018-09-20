<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

//生成帖子的简介
function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}