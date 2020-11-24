<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users()
    {
        return  UserResource::collection(User::whereDriver(false)->get());
    }

    public function drivers()
    {
        return  UserResource::collection(User::whereDriver(true)->get());
    }


}
