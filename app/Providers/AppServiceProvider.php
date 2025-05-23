<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Menangkap query yang dieksekusi
        DB::listen(function ($query) {
            // Log query SQL
            Log::info("SQL Query: " . $query->sql);
            Log::info("Bindings: " . implode(", ", $query->bindings));
            Log::info("Execution Time: " . $query->time . " ms");
        });
    }
}
