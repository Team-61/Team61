<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeamRequest;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function store(CreateTeamRequest $request)
    {
        $data = $request->validated();

        $team = Team::create($data);

        return response()->json($team);
    }

    public function show(Team $team)
    {
        return response()->json($team);
    }

    public function delete(Team $team)
    {
        $team->delete();

        return response()->json([
            'message' => 'Team deleted'
        ]);
    }

    public function update(Request $request, Team $team)
    {
        $team->update($request->all());

        return response()->json([
            'message' => 'Team updated'
        ]);
    }
}
