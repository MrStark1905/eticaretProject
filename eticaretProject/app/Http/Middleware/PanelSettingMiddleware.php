<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PanelSettingMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Kullanıcı giriş yapmamışsa, login sayfasına yönlendir
        if (!Auth::check()) {
            return redirect()->route('login'); // 'login' rotasına yönlendir
        }

        $settings = SiteSetting::pluck("data", "name")->toArray();

        view()->share(["settings"=>$settings]);
        return $next($request);
    }
}
