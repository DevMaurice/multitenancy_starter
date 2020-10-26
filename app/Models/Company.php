<?php

namespace App\Models;

use Spatie\Multitenancy\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Tenant
{
    use HasFactory;

    protected $table = 'tenants';


}
