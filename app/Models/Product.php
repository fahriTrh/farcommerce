<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];

    public function scopeSearch($query, $search)
    {
        $query->when($search ?? false, function($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
                         ->orWhere('description', 'like', '%' . $search . '%');
        });
    }

    public function scopeCategory($query, $category)
    {
        $query->when($category ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                   $query->where('slug', $category);
            });
        });
    }

    public function scopeAuthor($query, $author)
    {
        $query->when($author ?? false, fn($query, $author) =>
            $query->whereHas('user', fn($query) => 
            $query->where('name', $author))
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
