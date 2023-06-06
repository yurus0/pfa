<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public $fillable=[
        'title',
        'description',
        'status',
        'deadline_date',
        'deadline_time',
    ];
    private $user_id, $id, $event_id, $category_id;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function event(){
        return $this->belongsTo(Event::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
}
