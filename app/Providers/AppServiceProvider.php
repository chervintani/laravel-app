<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Paginator::useBootstrap();
        Blade::directive('convert', function ($money) {
            return "<?php echo number_format($money, 2); ?>";
        });

        Blade::anonymousComponentNamespace('pages.login', 'login');
    }
}
