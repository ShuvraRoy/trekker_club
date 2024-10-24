<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_id',
        'date_time',
        'total_slots',
        'slots_available',
        'duration',
        'location',
        'fees',
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
