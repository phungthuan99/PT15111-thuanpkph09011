<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Models\Post;
use SebastianBergmann\Type\VoidType;
// use request để nhận dữ liệu lên theo pt request
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/admin', 'test-admin');


Route::get('/students{id}/{age}', function ($id, $number) {
    dd('hê lô guột' . $id . '' . $number);
});

Route::get('/students/detail', function () {
    // $students = DB::table('table_first')->get();
    return view('students.detail');
});

// cách 2
// Router::view('/student/detail-2', 'student.detail');

Route::get('/table_first', function () {
    $student = DB::table('table_first')->where('id', '=', 1)->first();
    // lấy riêng id
    // $table_first = DB::table('table_first')->where('id', '=', 2)->first();
    return view('students.detail', ['studentValue' => $student]);
});

Route::get('/student-list', function () {
    // truy van van lay danh sach student bang query builder
    $students = DB::table('table_first')->orderBy('id', 'desc')->get();
    // dd($students);
    return view('students.list', [
        'students' => $students,
        'error' => null,
    ]);
})->name('student-list');

// tao route resource cho student controller
Route::resource('students', StudentController::class)
    // ->only(['index']); khi chi dung ham nao do
    // ->except(['create', 'edit']); khi can bo qua ham nao do
;

Route::resource('comments', CommentController::class);
// Tao route cho subject controller khong dung resource
Route::get('subjects', [SubjectController::class, 'index'])
    ->name('subjects.index');


Route::resource('posts', PostController::class);

Route::resource('categories', CategoryController::class);
//chuc năng login va route post
Route::get('/login', function () {
    return view('login');
})->name('get-login');
Route::post('/post-login', function (Request $request) {
    //su dụng $request->all() hoặc $request->input name
    // dd($request->all());

    $username = $request->username;
    // thực hiện truy vấn theo giá trị vừa gửi lên
    $student = DB::table('table_first')->where('name', 'like', "%$username%")->first();

    // nếu có student thì sẽ redirect sang student-list
    if ($student) {
        return redirect()->route('student-list');
    }
    return redirect('login');

    //xử lý logic, truy vấn...
})->name('post-login');

Route::get('/post', function () {
    $post = Post::find(4);
    dd($post);
});
