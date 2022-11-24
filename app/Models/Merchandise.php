<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Reply;

class Merchandise extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
    'name',
    'request',
    'body',
    'title_id',
    ];
    
    public function replies()   
    {
        return $this->hasMany(Reply::class);  
    }
}
