<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Index extends Controller
{
protected $acf = true;
public function field() {


	$args = array(
            'post_type' => 'nom_rea',
        );

        return get_posts();
}
	// @foreach
	// {
	// 	$tab_array

	// }
	
}
