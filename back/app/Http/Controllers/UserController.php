<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(CreateUserRequest $request)
    {
        $data = $request->validated();

        $data['avatar'] = $request->file('avatar')->store('avatars');

        $user = User::create($data);

        return response()->json($user);
    }

    public function show(User $user)
    {
        return response()->json($user);
    }

    public function delete(User $user)
    {
        $user->delete();

        return response()->json([
            'message' => 'User deleted'
        ]);
    }
}
