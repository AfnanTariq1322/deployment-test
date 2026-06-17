<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Artisan;
use App\Models\Product;
 Route::get('/', function () {
$products = Product::all();
return view('welcome', compact('products'));
 });

Route::get('/migrate-seed', function () {
    Artisan::call('migrate:fresh', ['--seed' => true]);
return 'Migration and seeding completed successfully.';
});

Route::get('/migrate', function () {
    Artisan::call('migrate');
return 'Migration and seeding completed successfully.';
});

Route::get('/clear', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
return 'Caches cleared and config cached successfully.';
});