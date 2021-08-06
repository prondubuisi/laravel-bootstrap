<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\HasResponse;

class TestController extends Controller
{
    use HasResponse;
    public function index()
    {
        return $this->successResponse('transaction response', ['hello','hi']);
    }
}
