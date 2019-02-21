<?php

if (! function_exists('get_avatar')) {
    function get_avatar($user, $size = null) {
        $image = config('app.avatar_path') . ($user->avatar ?? config('app.default_avatar'));
        $sizes = config('app.avatar_sizes');
        if (! ($size && in_array($size, $sizes))) {
            $size = current($sizes);
        }
        $image = preg_replace('/\.([a-z]+)/', '_' . $size . '.$1', $image);

        return $image;
    }
}
