<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

// Product.php (Model)
    protected $fillable = ['name', 'qty', 'price', 'description'];

}
