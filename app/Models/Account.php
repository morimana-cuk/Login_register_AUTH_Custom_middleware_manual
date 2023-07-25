<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'account';
    protected $primaryKey = false; // mendevinisikan primary key
    public $incrementing = false; // auto pada primaryKey incremment false
    public $timestamps = false; // create_at dan update_at false

    protected $guarded = [];
}
