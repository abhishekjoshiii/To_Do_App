<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Task extends Model
{
    use HasFactory,softDeletes;

    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description','duedate', 'status', 'priority', 'user_id'];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function taskcastegory():BelongsTo
    {
        return $this->belongsTo(TaskCategory::class);
    }
}
