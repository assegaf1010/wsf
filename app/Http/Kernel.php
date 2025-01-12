protected $routeMiddleware = [
    'auth' => \App\Http\Middleware\Authenticate::class,
    'role' => \App\Http\Middleware\RoleMiddleware::class, 
    'redirect.role' => \App\Http\Middleware\RedirectBasedOnRole::class,
];

