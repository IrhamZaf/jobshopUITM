use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

public function handle(Request $request, Closure $next, ...$roles)
{
    if (!Auth::check() || !in_array(Auth::user()->role, $roles)) {
        return redirect('/'); // Redirect if the user does not have the required role
    }

    return $next($request);
} 