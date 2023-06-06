<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private $id;
    public $fillable = [
        'name',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function habits(){
        return $this->hasMany(Habit::class);
    }
    public function tasks(){
        return $this->hasMany(Task::class);
    }
    public function events(){
        return $this->hasMany(Event::class);
    }
}
