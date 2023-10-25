<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\StudentsController;


class Students extends Model
{
    use HasFactory;

    protected $table = "students";

    public $timestamps = false;
}
