<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public static function validate($request)
    {
        $request->validate([
            'title' => 'required|uniqe|max:255',
        ]);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
      return $this->belongsTo(Category::class, 'category_id');
    }
}
