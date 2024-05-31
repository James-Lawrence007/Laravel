<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;

Route::get('/', [homeController::class, 'index']);
Route::get('/about', [homeController::class, 'about']);
Route::get('/contact', [homeController::class, 'contact']);

/*
URL Query string routing:
*/

// Route::get('/store', function (){

//     $category = request("category");

//     if(isset($category)){

//         return "You are viewing the store for " . strip_tags($category);
//     }

//     return 'You are view all content.';

    
    
// });

/* URL Parameter routing */
Route::get('/store/{category?}/{item?}', function ($category = NULL, $item = NULL){



    if(isset($category)){

        if(isset($item)){

            return "You are viewing the store for $category for $item";

        }
        return "You are viewing the store for {$category}";
    }

    return 'You are view all content.';

    
    
});