<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class ExampleController
{
    public function index()
    {
        return response()->json(['success' => true]);
    }
}
