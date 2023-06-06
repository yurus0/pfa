<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;
    public $name, $image, $description, $status;
    private $task_required, $habit_required, $event_required, $user_id;
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
