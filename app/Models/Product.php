<?php

namespace App\Models;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [
        'cate_id',
        'name',
        'description',
        'original_price',
        'selling_price',
        'image',
        'qty',
        'tax',
        'status',
        'trending',
    ];

    
   
        
        /**
         * Get the user that owns the Product
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function Category(): BelongsTo
        {
            return $this->belongsTo(Category::class, 'cate_id', 'id');
        }
        public function reservations()
        {
            return $this->hasMany(Reservation::class);
        }    
}
