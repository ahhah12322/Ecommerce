<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $user = session('user'); // Lấy user từ session
        
        if (!$user) {
            // Nếu chưa đăng nhập, chuyển hướng tới trang login
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để truy cập trang này.');
        }

        if (!in_array($user->role, explode('|', $role))) {
            // Nếu vai trò không phù hợp, từ chối truy cập
            return redirect()->route('forbidden')->with('error', 'Bạn không có quyền truy cập trang này.');
        }
        

        return $next($request); // Cho phép truy cập
    }
}

