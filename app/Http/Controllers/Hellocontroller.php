<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hellocontroller extends Controller
{
    public function hello(): string
    {
        return 'Hello Wolrd';
    }
}
