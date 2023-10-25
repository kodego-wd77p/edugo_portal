<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\SubmittedActivities;

class Submit_acti extends Model
{
    use HasFactory;

    protected $table = "submitted_activities";

    public $timestamps = false;
}
