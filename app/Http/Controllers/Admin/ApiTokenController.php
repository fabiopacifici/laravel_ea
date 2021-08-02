<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiTokenController extends Controller
{
    /**
     * Update the authenticated user's API token.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function update(Request $request)
    {
        $token = Str::random(80);
        //ddd($token, $request->user());

        $request->user()->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();

        //return ['token' => $token];
        return back()->with('token', $token);
    }
}
