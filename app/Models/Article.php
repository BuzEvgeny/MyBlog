<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected  $primaryKey = 'id';

    protected $fillable = [
        'title',
        'author',
        'category',
        'short_text',
        'full_text'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
