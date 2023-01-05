<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $fillable = [
                            "category_id", 
                            "title", 
                            "short_description", 
                            "description", 
                            "price", 
                            "availability", 
                            "stocks", 
                            "image", 
                            "offer_percentage"
                        ];

    public function category() {
        return $this->belongsTo(\App\Models\Category\CategorySubModel::class, 'category_id');
    }
}
