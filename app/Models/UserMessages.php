<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMessages extends Model
{
    use HasFactory;
    protected $fillable = [
        'msg_name',
        'email',
        'phone',
        'subject',
        'message',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
