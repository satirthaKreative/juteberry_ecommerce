<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorySubModel extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'parent_id'];

    public function subcategory()
    {
        return $this->hasMany(\App\Models\Category\CategorySubModel::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(\App\Models\Category\CategorySubModel::class, 'parent_id');
    }

    public function product() {
        return $this->hasMany(\App\Models\Product\ProductModel::class);
    }
}
