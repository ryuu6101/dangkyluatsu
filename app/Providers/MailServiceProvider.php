<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class MailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        if (!Schema::hasTable('mail_configs')) return;
        $config = DB::table('mail_configs')->first();

        if (!$config) return;
        Config::set('mail.mailers.smtp.username', $config->username);
        Config::set('mail.mailers.smtp.password', $config->password);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
