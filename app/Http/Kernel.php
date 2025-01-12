protected $middlewareAliases = [
        'role' => \App\Http\Middleware\RoleMiddleware::class, 
        'redirect.role' => \App\Http\Middleware\RedirectBasedOnRole::class,
    ];