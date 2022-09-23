<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Helpers\APIFormatter;
use App\Http\Controllers\Controller;

class APIUserController extends Controller
{
    public function index()
    {
       $data = User::all();

        if ($data) {
            return APIFormatter::createApi(200, 'Success', $data);
        } else {
            return APIFormatter::createApi(400, 'Failed');
        }
    }
}
