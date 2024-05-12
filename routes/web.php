<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\publierController;
use App\Http\Controllers\TousAnnonceController;
use \App\Http\Controllers\profileController;
Route::get("/",['\App\Http\Controllers\homeController','index']
);
Route::get("/profile",['\App\Http\Controllers\profileController','index']
);
Route::get("/login",['\App\Http\Controllers\loginController','index']
);
Route::post("/login",['\App\Http\Controllers\loginController','login']
);
Route::get("/register",['\App\Http\Controllers\registerController','index']
);
Route::get("/publier",['\App\Http\Controllers\publierController','index']
);
Route::post("/store-annonce",['\App\Http\Controllers\publierController','store']
);
Route::get("/Annonces",['\App\Http\Controllers\TousAnnonceController','index']
);
Route::post("/store-register",['\App\Http\Controllers\registerController','store']
);



