<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\StudentAuthController;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\AdminController;

// Show login form
Route::get('/adminlogin', [AdminController::class, 'showLoginForm'])->name('admin.login');

// Handle login
Route::post('/adminlogin', [AdminController::class, 'login']);
Route::get('/admindash', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Protect dashboard with session-based authentication
Route::middleware(['adminAuth'])->group(function () {
    Route::get('/admindash', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/adminlogout', [AdminController::class, 'logout'])->name('admin.logout');
});
/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them 
| will be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shome', function () {
    return view('shome');
});

Route::get('/assign', function () {
    return view('assign');
});
Route::get('/supervisor', function () {
    return view('supervisor');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/faculty', function () {
    return view('faculty');
});
Route::get('/department', function () {
    return view('department');
});
Route::get('/campus', function () {
    return view('campus');
});
Route::get('/assignSupervisor', function () {
    return view('assignSupervisor');
});

// Login and Register routes for student
Route::get('/student/login', [StudentAuthController::class, 'showLoginForm'])->name('student.login');
Route::post('/student/login', [StudentAuthController::class, 'login']);
Route::get('/student/register', [StudentAuthController::class, 'showRegistrationForm'])->name('student.register');
Route::post('/student/register', [StudentAuthController::class, 'register']);
Route::post('/student/logout', [StudentAuthController::class, 'logout'])->name('student.logout');

use App\Http\Controllers\DashboardsController;

Route::middleware(['auth:student'])->group(function () {
    Route::get('/student/dashboard', [DashboardsController::class, 'studentDashboard'])->name('student.dashboard');
    
});


// Default dashboard route for the web (protected by 'auth' middleware)
Route::get('/dashboard', function () {
    return view('student.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\ProjectController;


// Other routes...
Route::put('/projects/{project:project_code}', [ProjectController::class, 'update'])->name('projects.update');


Route::get('projects/{project_code}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::delete('projects/{project_code}', [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::middleware(['auth:student'])->group(function() {
    Route::get('projects/search', [ProjectController::class, 'search'])->name('projects.search');
});
Route::middleware(['auth:student'])->group(function () {
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    

});

require __DIR__.'/auth.php';



