<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\CreationOfPortal;


use App\Http\Controllers\CreationOfPortalController;
// use App\Http\Controllers\CreatePortalController;


class CreationOfPortal extends Model
{
    use HasFactory;

    protected $table = "creation_of_portals"; 

    // public $timestamps = false;

}
