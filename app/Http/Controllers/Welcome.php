<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Welcome extends BaseController
{
    public function index(): View
    {
        return view('welcome')->with([
            'data' => [
                'HTML' => '90',
                'Laravel' => '85',
                'PHP' => '85',
                'MYSQL' => '80',
                'JavaScript' => '75',
                'JQuery' => '75',
                'CSS' => '70',
                'Vue.js' => '70',
                'Node.js' => '40',
                'ASP.NET' => '35',
                'xamarin' => '35',
                'WordPress' => '20',
            ],
        ]);
    }
}
