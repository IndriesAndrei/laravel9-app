<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // on the Listing model we can filter with this
    public function scopeFilter($query, array $filters) {
        if($filters['tag'] ?? false) {
            // search for the tag from tags column
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false) {
            // search for the tag from tags column
            $query->where('title', 'like', '%' . request('search') . '%')
                    ->orWhere('description', 'like',  '%' . request('search') . '%')
                    ->orWhere('tags', 'like',  '%' . request('search') . '%');
        }
    }
}
