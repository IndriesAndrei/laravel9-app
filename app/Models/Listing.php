<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'company', 'logo', 'location', 'website', 'email', 'description', 'tags'];

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

    // relationship with User model (users table)
    // a listing belongs to a user
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
