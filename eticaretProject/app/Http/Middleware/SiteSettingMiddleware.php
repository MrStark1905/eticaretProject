<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Category;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SiteSettingMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $settings = SiteSetting::pluck("data", "name")->toArray();

        $categories = Category::where("status", "1")->with("subcategory")->withCount("items")->get();

        /*
        $countQty = 0;
        $cartItem = session("cart", []);
        foreach($cartItem as $cart) {
            $countQty += $cart["qty"];
        }

        Toplam ürün adedi için
        */

        view()->share(["settings"=>$settings, "categories"=>$categories]); // "countQty"=>$countQty Toplam ürün adedi için
        return $next($request);
    }
}
