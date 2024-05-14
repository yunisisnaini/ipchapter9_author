<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Author extends Model {
    use HasFactory;

     /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = ['name', 'biography', 'gender'];
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
