<?php

use App\Livewire\Layouts\App;
use App\Livewire\Portfoilo\Home;
use App\Livewire\Portfoilo\About;
use App\Livewire\Portfoilo\Skills;
use App\Livewire\Portfoilo\Contact;
use App\Livewire\Portfoilo\Projects;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;




Route::prefix("portfolio")->group(function(){
        Route::get("home", Home::class)->name("home");
        Route::get("project", Projects::class)->name("project");
        Route::get("skills", Skills::class)->name("skills");
        Route::get("about", About::class)->name("about");
        Route::get("contact", Contact::class)->name("contact");
});


// route that handles cv download
Route::get("pdf", [CVController::class, 'index'])->name("cv.download");

