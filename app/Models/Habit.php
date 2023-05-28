<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    use HasFactory;
    public $fillable=[
        'title', 
        'description',
        'category',
        'status',
        'frequency',
        'streak',
    ];
    private $user_id, $id;
    public function user(){
        return $this->belongsTo(User::class);
    }
}
