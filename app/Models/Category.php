<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table ='categories';
    protected $primaryKey = 'id';
    protected $fillable = ['name','description','user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsto(User::class);
    }

    public function taskcategory(): belongsTo
    {
        return $this->belongsto(Taskcategory::class);
    }

}
