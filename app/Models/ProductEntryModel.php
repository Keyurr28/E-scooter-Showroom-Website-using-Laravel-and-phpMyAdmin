<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEntryModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'category', 'pnameid', 'company', 'color', 'material',
        'size', 'description', 'image', 'image1', 'image2',
        'image3', 'image4', 'productstatus', 'price'
    ];

    public function product()
    {
        return $this->belongsTo(ProductModel::class, 'pnameid', 'id');
    }
}
