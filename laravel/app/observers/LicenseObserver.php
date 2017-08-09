<?php

namespace App\Observers;

//use App\Models\License;

use App\Models\License;
use App\Models\Renewal;
use App\Models\LicensePayment;

class UserObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  License  $user
     * @return void
     */
    public function created(License $license)
    {
        //
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  License  $user
     * @return void
     */
    public function deleting(License $license)
    {
        Renewal::where('license_id',$license->id)->delete();
        LicensePayment::where('license_id',$license->id)->delete();
    }
}