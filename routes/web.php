<?php

use App\Http\Livewire\Pages\Landing;
use App\Http\Livewire\Pages\Drugstore;
use App\Http\Livewire\Pages\Medicine;
use App\Http\Livewire\Pages\About;
use App\Http\Livewire\Pages\Support;
use Illuminate\Support\Facades\Route;


Route::get('/', Landing::class);

Route::get('/FindDrugstore', Drugstore::class);

Route::get('/FindMedicine', Medicine::class);

Route::get('/AboutUs', About::class);

Route::get('/Support', Support::class);