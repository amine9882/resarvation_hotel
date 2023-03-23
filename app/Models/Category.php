<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'status',
        'popular',
    ];
    
    public function product()
    {
        return $this->hasMany(Product::class);
    }

 
}
