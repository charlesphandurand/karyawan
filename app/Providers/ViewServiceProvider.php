<?php

namespace App\Providers;
use App\Models\Gaji;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['karyawans.fields'], function ($view) {
            $gajiItems = Gaji::pluck('jabatan','id')->toArray();
            $view->with('gajiItems', $gajiItems);
        });
    }
}
