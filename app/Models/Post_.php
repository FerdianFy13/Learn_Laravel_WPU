<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste
{
    // use HasFactory;
    static $blog_posts = [
        [
            'title' => 'Laravel PHP',
            'slug' => 'Laravel-PHP',
            'Author' => 'Ferdian Firmansyah',
            'Header' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo est doloribus ex, numquam eius sunt hic omnis vel vitae, voluptatibus rerum ad voluptatem eaque iure vero sint obcaecati cum accusamus iusto itaque veniam recusandae deserunt, nostrum soluta. Minima, sed quaerat! Aperiam facere explicabo consectetur vero earum quisquam dolor natus molestias!',
        ],

        [
            'title' => 'Java Javascript',
            'slug' => 'Java-Javascript',
            'Author' => 'Yusuf Demir',
            'Header' =>
                'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos aspernatur laboriosam magnam est, incidunt, veniam quibusdam enim recusandae repellendus dolore impedit iure sed corporis nulla consectetur quas tenetur repudiandae mollitia perspiciatis officia necessitatibus voluptates aperiam accusamus ullam? Laborum eveniet corrupti maiores debitis delectus, dolor, et quasi suscipit ipsa tempore aliquid modi, nihil eaque cupiditate praesentium beatae nemo ipsam recusandae in perferendis pariatur hic rerum nam? Sapiente esse repellat, nemo aliquam quidem, dolorem consectetur optio molestias rem, praesentium mollitia id quo voluptatum quod possimus dolores harum unde necessitatibus eos eaque excepturi maiores? Rem officiis minus consequatur, ullam impedit pariatur quia nisi.',
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}