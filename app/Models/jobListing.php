<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobListing extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'company', 'location', 'website', 'jobType', 'email', 'description', 'tags', 'logo', 'industry', 'experience_level', 'dateline'];


    //filters
    public function scopeFilter($query, array $filters)
    {
        //tag filter
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        //search filter
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%')
                ->orWhere('location', 'like', '%' . request('search') . '%')
            ;
        }
    }
    // Relationship To User
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}