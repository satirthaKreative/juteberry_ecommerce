<?php

namespace App\Models\Product;

use App\Models\Category\CategorySubModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'products';

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

    public function category()
    {
        return $this->belongsTo(CategorySubModel::class, 'category_id');
    }

    public function CategoryRelationWithProduct()
    {
        return $this->belongsToMany(
            CategorySubModel::class,
            'prodcates',
            'product_id',
            'category_id'
        )->withTimestamps();
    }
}
