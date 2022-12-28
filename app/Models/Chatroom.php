<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Merchandise;

class Chatroom extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'user1',
    'user2',    
    'merchandise_id',
    ];
    
    public function user_1()
    {
        return $this->belongsTo(User::class, 'user1');
    }
    
    public function user_2()
    {
        return $this->belongsTo(User::class, 'user2');
    }
    
    public function merchandise()
    {
        return $this->belongsTo(Merchandise::class);
    }
}
