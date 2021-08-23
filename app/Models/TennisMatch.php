<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TennisMatch extends Model
{   

    protected $fillable = [
        'location',
        'playerOne',
        'playerTwo',
        'result'
    ];

    public function playerOne(){
        return $this->hasOne(Player::class, 'id','playerOne');
    }

    public function playerTwo(){
        return $this->hasOne(Player::class, 'id','playerTwo');
    }

    use HasFactory;
}
