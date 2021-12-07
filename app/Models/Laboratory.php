<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    use HasFactory;
    protected $fillable = ['c_name' , 'l_content' , 't_id' , 'f_id' , 'delete_flag'];
}
