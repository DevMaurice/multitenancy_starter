<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Spatie\Multitenancy\Models\Concerns\UsesTenantModel;

class SetCurrentTenant
{
    use UsesTenantModel;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $tenant = $this->getTenantModel()::find(auth()->user()->id)->first();

        $tenant->makeCurrent();
    }
}
