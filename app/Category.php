<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = 'id';

    protected $fillable = [
        'category_name' ,  'category_code', 'parents_cate_id'
    ];

    public function products()
    {
        return $this->hasMany('App\Product','category_id');
    }
}
