<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function test_minorite(Request $request)
    {
        if ($request->age < 18) {
            return "mineur";
        } else {
            return "majeur";
        }
        return $request->age;
    }
}
