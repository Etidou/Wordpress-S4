<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller {

    public static function previousLink() {
        $previous = get_previous_post();
        return $previous;
    }

    public static function nextLink() {
        $next_post = get_next_post();
        return $next_post;
    }
}