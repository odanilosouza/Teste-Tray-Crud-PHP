<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vend;


class VendController extends Controller
{
    public function create(Request $r) {
        $new_vend = [
            'name'=> 'Danilo',
            'email' => 'danilo@gmail.com'
        ];

        $vend = new Vend();
        $vend->name = 'Danilo';
        $vend->email = 'danilo@gmail.com';

        dd($vend);

    }

}
