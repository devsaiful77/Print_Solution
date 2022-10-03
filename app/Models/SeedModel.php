<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeedModel extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    public $table = 'posts';

    /**
     * @var bool
     */
    public $timestamps = false;
}
