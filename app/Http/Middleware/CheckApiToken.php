<?php

namespace App\Http\Middleware;

use App\User;
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
        /*  return response()->json([
            'api_token'  => $api_token
        ]); */
        // verifichiamo token
        $api_token_hash = hash('sha256', $api_token);
        $user = User::where('api_token', $api_token_hash)->first();

        if ($user === null) {

            return response()->json([
                'success' => false,
                'error' => 'API token errato'
            ]);
        }

        return $next($request);
    }
}
