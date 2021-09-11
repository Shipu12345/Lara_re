<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

//        User::truncate();
//        Category::truncate();
//        Post::truncate();
        $user=User::factory()->create([
            'name'=>'Shipu'
        ]);
        Post::factory(5)->create([
            'user_id'=>$user->id
        ]);


//         $user=User::factory()->create();
//         $personal=Category::create([
//            'name'=>'Personal',
//            'slug'=>'persnal'
//         ]);
//        $family=Category::create([
//            'name'=>'Family',
//            'slug'=>'family'
//        ]);
//        $work=Category::create([
//            'name'=>'Work',
//            'slug'=>'work'
//        ]);
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$family->id,
//            'title'=>'My Family post',
//            'slug'=>'my-first-post',
//            'excerpt'=>'The excerpt of my post',
//            'body'=>"kshkahf j sashfk a hl lskahsfkhf knl ejo lljdflj sdljfs,n f naljlj kl khag ktyhwkjhkh Hello ahow atre klj fyou doninhg"
//        ]);
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$work->id,
//            'title'=>'My Work post',
//            'slug'=>'my-work-post',
//            'excerpt'=>'The excerpt of my post',
//            'body'=>"kshkahf j sashfk a hl lskahsfkhf knl ejo lljdflj sdljfs,n f naljlj kl khag ktyhwkjhkh Hello ahow atre klj fyou doninhg"
//        ]);

    }
}
