<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Included extends Model
{
    use HasFactory;
    protected $fillable = [
        'included_item_name',
       

];
}
