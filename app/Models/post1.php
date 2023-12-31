<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post1
{
    private static $contents_blog = [
        [
            "title" => "Tate no yusha",
            "slug" => "judul pertama",
            "author" => "?????",
            "sinopsi" => "Four Cardinal Heroes merupakan sekelompok pria biasa dari Jepang modern yang dipanggil ke kerajaan Melromarc untuk menjadi penyelamatnya. Berabad abad Melromarc diganggu oleh Gelombang Bencana yang telah berulang kali merusak tanah dan membawa bencana bagi warganya.  Keempat pahlawan masing - masing dianugerahi pedang, tombak, panah dan perisai untuk mengalahkan gelombang yang akan datang."
        ],

        [
            "title" => "Dr Stone",
            "slug" => "judul kedua",
            "author" => "?????",
            "sinopsi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas laboriosam ut, quos veniam consectetur nihil? Assumenda ut maxime ab aperiam incidunt rem error modi suscipit, ducimus, sapiente tempora eos illum nesciunt natus eveniet illo sunt consequatur cupiditate! Alias eum in unde! Blanditiis mollitia sint repellendus dolores quaerat aliquid ratione quo tempore ea impedit suscipit aperiam dolorum, animi odio totam? Consequuntur pariatur animi, qui in recusandae nesciunt molestias quo sint fuga velit minus eos eius repellendus praesentium sit aperiam eveniet quod quisquam facilis sed sapiente quidem vel. Cum animi ullam iusto laboriosam minima saepe? Officiis, nobis est saepe natus cum enim."
        ],
    ];

    // public static function all()
    // {
    //     // return self::$contents_blog;
    //     //menggunakan collection 
    //     return collect(self::$contents_blog);
    // }

    // public static function find($slug)
    // {
    //     //$contents = self::$contents_blog;
    //     $contents = static::all();
    //     //$post = [];
    //     // foreach ($contents as $p) {
    //     //     if ($p["slug"] === $slug) {
    //     //         $post = $p;
    //     //     }
    //     // }
    //     // return $post;
    //     return $contents->firstWhere('slug', $slug);
    // }
}
