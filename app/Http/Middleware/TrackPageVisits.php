<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\PageVisit;

class TrackPageVisits
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentUrl = $request->path(); // Lấy URL hiện tại

        // Kiểm tra và cập nhật lượt truy cập
        $pageVisit = PageVisit::firstOrCreate(
            ['page_url' => $currentUrl],
            ['visit_count' => 0]
        );

        $pageVisit->increment('visit_count');
        return $next($request);
    }
}
