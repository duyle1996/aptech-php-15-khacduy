<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {echo '1.Middleware';
        echo 'Vai tro:' . $role;
        echo'<br> thuc hien khi dang xu ly HTML reponse';
        return $next($request);
    }
    public function terminate($request, $response)
    {
        echo "<br> Terminate";
        echo" thuc hien sau khi http dua len";
    }
}
