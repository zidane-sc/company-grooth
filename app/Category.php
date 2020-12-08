<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function getTotalPostAttribute()
    {
        $total_post = 0;

        foreach ($this->posts as $item) {
            if ($item->status == 'PUBLISHED') {
                $total_post += 1;
            }
        }
        
        return $total_post;
    }
}
