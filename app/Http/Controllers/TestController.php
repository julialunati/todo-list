<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        // exclusively for testing MySQL connection
        $testModel = new Test();
        return view('test', [
            'categories' => $testModel->getCategories()
        ]);
    }
}
