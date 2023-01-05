<?php

namespace App\Models\Category;

use App\Models\Product\ProductModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorySubModel extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = ['name', 'slug', 'parent_id'];

    public function subcategory()
    {
        return $this->hasMany(CategorySubModel::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(CategorySubModel::class, 'parent_id');
    }

    public function product()
    {
        return $this->hasMany(ProductModel::class, 'category_id', 'id');
    }

    public function productBelongsToCategory()
    {
        return $this->belongsToMany(
            ProductModel::class,
            'prodcates',
            'category_id',
            'product_id'
        )->withTimestamps();
    }
}
