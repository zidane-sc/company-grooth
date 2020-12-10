<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
