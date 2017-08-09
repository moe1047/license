<?php

namespace App\Providers;

use App\Models\License;
use App\Models\VesselLicense;
use App\Models\VesselLicenseRenewal;
use App\Models\VesselPayment;
use App\Observers\UserObserver;
use App\Models\Renewal;
use App\Models\LicensePayment;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //License::observe(UserObserver::class);
        License::deleting(function($license){
            Renewal::where('license_id',$license->id)->delete();
            LicensePayment::where('license_id',$license->id)->delete();
        });
        VesselLicense::deleting(function($license){
            VesselLicenseRenewal::where('vessel_license_id',$license->id)->delete();
            VesselPayment::where('vessel_id',$license->id)->delete();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
