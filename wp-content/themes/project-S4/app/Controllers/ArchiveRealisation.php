<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class ArchiveRealisation extends Controller
{
public function post_reas() {


	$args = array(
            'post_type' => 'realisation',
        );

        return get_posts($args);
}
	// @foreach
	// {
	// 	$tab_array

	// }
	
}
