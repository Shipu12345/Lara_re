<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Post extends Model
{
    use HasFactory;

    protected  $with=['category','author'];

//    protected $fillable=['title','excerpt','body','id'];
//    public function getRouteKeyName()
//    {
//        return 'slug'; // TODO: Change the autogenerated stub
//    }


    public function category()
{
    return $this->belongsTo(Category::class);
}
public function comments()
{
    return $this->hasMany(Comment::class);
}

public function author()
{
    return $this->belongsTo(User::class,'user_id');
}
public  function scopeFilter($query, array $filters){
//    dd($filters);

    $query->when($filters['search'] ?? false, function ($query, $search)  {

        return $query->where(function ($query) use ($search){
           $query ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', "%" . $search . "%");
        });

    });
    $query->when($filters['category'] ?? false, function ($query, $category)  {
                $query->whereHas('category',function ($query) use ($category){
                   $query->where('slug',$category);
                });

//        return $query
//                     ->whereExists(function ($query) use($category){
////                         dd($category);
//                        return $query
//                             ->from('categories')
//                             ->whereColumn('categories.id','posts.category_id')
//                             ->where('categories.slug',$category);
//                     });
    });
    $query->when($filters['author'] ?? false, function ($query, $author)  {
        $query->whereHas('author',function ($query) use ($author){
            $query->where('username',$author);
        });
    });


//    if($filters['search'] ?? false){
//        $query
//            ->where('title','like','%'.request('search').'%')
//            ->orWhere('body','like',"%".request('search')."%");
//    }
}

}
