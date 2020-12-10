<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function features()
    {
        return $this->hasMany(ProductFeature::class);
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }

    public function advantages()
    {
        return $this->hasMany(Advantage::class);
    }
}
