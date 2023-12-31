<?php

use App\Models\User;
use App\Models\post1;
use App\Models\Category;
use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostsController;
use App\Http\Controllers\AdminCategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mainlayout', function () {
    return view('layout/mainlayout');
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Andreas Febri Hermawan",
        "domisili" => "Yogyakarta",
        "pekerjaan" => "host Kuliyah malam"
    ]);
});

// Route::get('/posts', [PostController::class, 'index']);

// Route::get('/content', function () {
//     return view('content');
// });

Route::get('/home', function () {
    return view('home');
});
//model
// Route::get('/content', function () {
//   $content_post = [
//         [
//             "title" => "Tate no yusha",
//             "slug" => "judul pertama",
//             "author" => "?????",
//             "sinopsi" => "Four Cardinal Heroes merupakan sekelompok pria biasa dari Jepang modern yang dipanggil ke kerajaan Melromarc untuk menjadi penyelamatnya. Berabad abad Melromarc diganggu oleh Gelombang Bencana yang telah berulang kali merusak tanah dan membawa bencana bagi warganya.  Keempat pahlawan masing - masing dianugerahi pedang, tombak, panah dan perisai untuk mengalahkan gelombang yang akan datang."
//         ],

//         [
//             "title" => "Dr Stone",
//             "slug" => "judul kedua",
//             "author" => "?????",
//             "sinopsi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas laboriosam ut, quos veniam consectetur nihil? Assumenda ut maxime ab aperiam incidunt rem error modi suscipit, ducimus, sapiente tempora eos illum nesciunt natus eveniet illo sunt consequatur cupiditate! Alias eum in unde! Blanditiis mollitia sint repellendus dolores quaerat aliquid ratione quo tempore ea impedit suscipit aperiam dolorum, animi odio totam? Consequuntur pariatur animi, qui in recusandae nesciunt molestias quo sint fuga velit minus eos eius repellendus praesentium sit aperiam eveniet quod quisquam facilis sed sapiente quidem vel. Cum animi ullam iusto laboriosam minima saepe? Officiis, nobis est saepe natus cum enim."
//         ],
//     ];

//     return view('content', [
//         "title" => "contents",
//         "contents" => post1::all()
//     ]);
// });


//halaman single post
// route::get('content/{slug}', function ($slug) {
// $content_post = [
//     [
//         "title" => "Tate no yusha",
//         "slug" => "judul pertama",
//         "author" => "?????",
//         "sinopsi" => "Four Cardinal Heroes merupakan sekelompok pria biasa dari Jepang modern yang dipanggil ke kerajaan Melromarc untuk menjadi penyelamatnya. Berabad abad Melromarc diganggu oleh Gelombang Bencana yang telah berulang kali merusak tanah dan membawa bencana bagi warganya.  Keempat pahlawan masing - masing dianugerahi pedang, tombak, panah dan perisai untuk mengalahkan gelombang yang akan datang."
//     ],

//     [
//         "title" => "Dr Stone",
//         "slug" => "judul kedua",
//         "author" => "?????",
//         "sinopsi" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas laboriosam ut, quos veniam consectetur nihil? Assumenda ut maxime ab aperiam incidunt rem error modi suscipit, ducimus, sapiente tempora eos illum nesciunt natus eveniet illo sunt consequatur cupiditate! Alias eum in unde! Blanditiis mollitia sint repellendus dolores quaerat aliquid ratione quo tempore ea impedit suscipit aperiam dolorum, animi odio totam? Consequuntur pariatur animi, qui in recusandae nesciunt molestias quo sint fuga velit minus eos eius repellendus praesentium sit aperiam eveniet quod quisquam facilis sed sapiente quidem vel. Cum animi ullam iusto laboriosam minima saepe? Officiis, nobis est saepe natus cum enim."
//     ],
// ];

// $new_post = [];
// foreach ($content_post as $post) {
//     if ($post["slug"] === $slug) {
//         $new_post = $post;
//     }
// }

//     return view('content2', [
//         "title" => "Single Post",
//         "post" => post1::find($slug)

//     ]);
// });

// materi menggunakan controller
route::get('/content', [PostController::class, 'index']);
// route::get('/content/{slug}', [PostController::class, 'show']);

//route model binding
route::get('/content/{post}', [PostController::class, 'show']);
route::get('/content/{post:slug}', [PostController::class, 'show']);

//categories
route::get('/categorie', function (Category $category) {
    return view('categorie', [
        'title' => 'Post Categories',
        'categories' => Category::all()

    ]);
});

//materi lama 
// route::get('/categories/{category:slug}', function (Category $category) {
//     return view('category', [
//         'title' => $category->name,
//         'posts' => $category->posts,
//         'category' => $category->name


//     ]);
// });
//materi baru N+1 Problem

route::get('/categories/{category:slug}', function (Category $category) {
    return view('content', [
        'title' => "Post by Category :$category->name",
        'contents' => $category->posts->load('author','category')
        

    ]);
});

route::get('/authors/{author:username}', function (User $author) {
    return view('content', [
        'title' => "Post By Author : $author->name",
        'contents' => $author->posts->load('author','category')
        
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');


Route::Resource('/dashboard/posts', DashboardPostsController::class)->middleware('auth');
Route::Resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');



