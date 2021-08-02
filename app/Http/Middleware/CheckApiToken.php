<?php

namespace App\Http\Middleware;

use Closure;

class CheckApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // recupero token
        $auth_token = $request->header('authorization');

        //verifica presenza token
        if (empty($auth_token)) {
            return response()->json([
                'successe' => false,
                'error' => '401! Unautorized, API token mancante'
            ]);
        }

        // Estrai token
        $api_token = substr($auth_token, 7);
        ddd($api_token);
        // verifichiamo token
        $user = User::where('api_token', $api_token)->first();
        if (!$user) {
            return response()->json([
                'successe' => false,
                'error' => 'API token errato'
            ]);
        }


        return $next($request);
    }
}
