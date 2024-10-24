<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipantModel extends Model
{
    use HasFactory;

    protected $table = 'participants';

    protected $fillable = [
        'user_id',
        'session_id',
        'date',
        'difficulty_level',
    ];

    protected $attributes = [
        'difficulty_level' => 0, // Default value for difficulty_level
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function session()
    {
        return $this->belongsTo(Session::class);
    }
}
