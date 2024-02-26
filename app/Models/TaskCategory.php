<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;


class TaskCategory extends Model
{
    use HasFactory,softDeletes;

   protected $table='taskcategories';
   protected $primaryKey = 'id';
   protected $fillable=['task_id','category_id'];

   public function task():HasMany
   {
       return $this->hasMany(Task::class);
   }
   public function category():HasMany
   {
       return $this->hasMany(Category::class);
   }
}
