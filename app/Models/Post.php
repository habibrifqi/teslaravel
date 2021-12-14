<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\DB;


class Post extends Model
{
    use HasFactory;
    use Sluggable;

    //fillable berarti field2 apa saja yang bisa di isi 
    // protected $fillable = ['title', 'excerpt', 'body'];
    //guarded berarti berikut field2 yg di tulis di bawah ini yang tidak bsia di isi,selain dibwah ini bisa
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%');
        //     // ->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%');
        });

        //versi callback
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        //versi ero fuction,,sama dengan yg di atas
        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'author',
                fn ($query) =>
                $query->where('username', $author)
            )
        );
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function Sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function Categ()
    {
        // $categor = $this->belongsTo(Category::class);
        $categ = DB::table('posts')
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->select('category_id', 'categories.name', DB::raw('count(posts.id) as tt'))
            // ->select('category_id', 'categories.name', 'categories.slug', DB::raw('count(posts.id) as tt'))
            // ->select('category_id')
            ->groupBy('posts.category_id', 'categories.name')
            ->get();

        return $categ;
    }

    public static function ConSide()
    {
        $cc =  Post::inRandomOrder()
            ->limit(4)
            ->get();

        return $cc;
    }
}
