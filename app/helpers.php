<?php 

    function flash($title = null, $message = null) {
        $flash = app('CanRover\Http\Flash');

        if(func_num_args() == 0) {
            return $flash;
        }

        //Default flash message
        return $flash->info($title, $message);
    }