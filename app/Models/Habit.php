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
        'status',
        'frequency',
        'streak',
    ];
    private $user_id, $id, $category_id;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function getStreakAttribute()
    {
        if ($this->last_updated_at) {
            // Calculate the difference in days between the last update and now
            $lastUpdatedDate = Carbon::parse($this->last_updated_at)->startOfDay();
            $today = Carbon::now()->startOfDay();
            $streak = $today->diffInDays($lastUpdatedDate);

            return $streak;
        }

        return 0;
    }
}
