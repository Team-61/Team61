<?php

namespace App\Http\Controllers;

use App\User;

class ParticipantController extends Controller
{
    public function index()
    {
        return response()->json(
            User::paginate()
        );
    }
}
