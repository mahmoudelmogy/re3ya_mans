<?php

use Illuminate\Support\Facades\Route;

// front
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AchievementController;
use App\Http\Controllers\Front\TeamController;
use App\Http\Controllers\Front\ActivityController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\SocialSearch;

// admin
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminHomePageController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminAchievementController;
use App\Http\Controllers\Admin\AdminTeamController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminSocialController;
use App\Http\Controllers\Admin\AdminActivityController;
use App\Http\Controllers\Admin\AdminContactController;






///////////// front///////////////////////////////////

Route::get('/',[HomeController::class,'index'])->name('home');

// achevement
Route::get('achievement',[AchievementController::class,'index'])->name('achievements');
Route::get('achievement/{slug}',[AchievementController::class,'detail'])->name('achievements_single');

// team
Route::get('team',[TeamController::class,'index'])->name('teams');
Route::get('team/{id}',[TeamController::class,'detail'])->name('teams_single');

// Activity
Route::get('activity',[ActivityController::class,'index'])->name('activites');

// contact
Route::post('contact/send-email',[ContactController::class,'send_email'])->name('contact_send_email');

// login
Route::get('/databasefront/login',[LoginController::class,'index'])->name('student_login');
Route::post('student_login_submit',[LoginController::class,'student_login_submit'])->name('student_login_submit');
Route::get('/student/logout',[LoginController::class,'student_logout'])->name('student_logout');




//////////// Admin /////////////////////////////////////////

Route::get('/admin/login',[AdminLoginController::class,'index'])->name('admin_login');
Route::post('/admin/login-submit',[AdminLoginController::class,'login_submit'])->name('admin_login_submit');
Route::get('/admin/logout',[AdminLoginController::class,'logout'])->name('admin_logout');
Route::get('/admin/forget_pasword',[AdminLoginController::class,'forget_pasword'])->name('admin_forget_pasword');
Route::post('/admin/forget-password-submit',[AdminLoginController::class,'forget_password_submit'])->name('admin_forget_pasword_submit');
Route::get('/admin/reset-password/{token}/{email}',[AdminLoginController::class,'reset_pasword'])->name('admin_reset_pasword');
Route::post('/admin/reset-password-submit',[AdminLoginController::class,'reset_password_submit'])->name('admin_reset_pasword_submit');



//* admin middleware*/
Route::middleware(['admin:admin'])->group(function(){
    Route::get('/admin/home',[AdminHomeController::class,'index'])->name('admin_home');

    Route::get('/admin/edit-profile',[AdminProfileController::class,'index'])->name('admin_profile');
    Route::post('/admin/edit-profile-submit',[AdminProfileController::class,'profile_submit'])->name('admin_profile_submit');

    // home page ////////////
    Route::get('/admin/home-page',[AdminHomePageController::class,'index'])->name('admin_home_page');
    Route::post('/admin/home/update',[AdminHomePageController::class,'update'])->name('admin_home_update');

    // settings /////////////////
    Route::get('/admin/settings',[AdminSettingController::class,'index'])->name('admin_settings');
    Route::post('/admin/settings/update',[AdminSettingController::class,'update'])->name('admin_settings_update');

        // Achievement /////////////////
        Route::get('/admin/Achievement/view',[AdminAchievementController::class,'index'])->name('admin_Achievement');
        Route::get('/admin/Achievement/create',[AdminAchievementController::class,'create'])->name('admin_Achievement_create');
        Route::post('/admin/Achievement/store',[AdminAchievementController::class,'store'])->name('admin_Achievement_store');
        Route::get('/admin/Achievement/edit/{id}',[AdminAchievementController::class,'edit'])->name('admin_Achievement_edit');
        Route::post('/admin/Achievement/update/{id}',[AdminAchievementController::class,'update'])->name('admin_Achievement_update');
        Route::get('/admin/Achievement/delete/{id}',[AdminAchievementController::class,'delete'])->name('admin_Achievement_delete');


        // Teams /////////////////
        Route::get('/admin/Team/view',[AdminTeamController::class,'index'])->name('admin_Team');
        Route::get('/admin/Team/create',[AdminTeamController::class,'create'])->name('admin_Team_create');
        Route::post('/admin/Team/store',[AdminTeamController::class,'store'])->name('admin_Team_store');
        Route::get('/admin/Team/edit/{id}',[AdminTeamController::class,'edit'])->name('admin_Team_edit');
        Route::post('/admin/Team/update/{id}',[AdminTeamController::class,'update'])->name('admin_Team_update');
        Route::get('/admin/Team/delete/{id}',[AdminTeamController::class,'delete'])->name('admin_Team_delete');


        // Abouts /////////////////
        Route::get('/admin/About/view',[AdminAboutController::class,'index'])->name('admin_About');
        Route::get('/admin/About/create',[AdminAboutController::class,'create'])->name('admin_About_create');
        Route::post('/admin/About/store',[AdminAboutController::class,'store'])->name('admin_About_store');
        Route::get('/admin/About/edit/{id}',[AdminAboutController::class,'edit'])->name('admin_About_edit');
        Route::post('/admin/About/update/{id}',[AdminAboutController::class,'update'])->name('admin_About_update');
        Route::get('/admin/About/delete/{id}',[AdminAboutController::class,'delete'])->name('admin_About_delete');


        // Abouts /////////////////
        Route::get('/admin/Social/view',[AdminSocialController::class,'index'])->name('admin_Social');
        Route::get('/admin/Social/create',[AdminSocialController::class,'create'])->name('admin_Social_create');
        Route::post('/admin/Social/store',[AdminSocialController::class,'store'])->name('admin_Social_store');
        Route::get('/admin/Social/edit/{id}',[AdminSocialController::class,'edit'])->name('admin_Social_edit');
        Route::post('/admin/Social/update/{id}',[AdminSocialController::class,'update'])->name('admin_Social_update');
        Route::get('/admin/Social/delete/{id}',[AdminSocialController::class,'delete'])->name('admin_Social_delete');

        // Activities /////////////////
        Route::get('/admin/Activity/view',[AdminActivityController::class,'index'])->name('admin_Activity');
        Route::get('/admin/Activity/create',[AdminActivityController::class,'create'])->name('admin_Activity_create');
        Route::post('/admin/Activity/store',[AdminActivityController::class,'store'])->name('admin_Activity_store');
        Route::get('/admin/Activity/edit/{id}',[AdminActivityController::class,'edit'])->name('admin_Activity_edit');
        Route::post('/admin/Activity/update/{id}',[AdminActivityController::class,'update'])->name('admin_Activity_update');
        Route::get('/admin/Activity/delete/{id}',[AdminActivityController::class,'delete'])->name('admin_Activity_delete');

        // settings /////////////////
        Route::get('/admin/settings',[AdminSettingController::class,'index'])->name('admin_settings');
        Route::post('/admin/settings/update',[AdminSettingController::class,'update'])->name('admin_settings_update');

        // contacts page ////////////
        Route::get('/admin/all-contacts', [AdminContactController::class, 'all_contacts'])->name('admin_all_contacts');
        Route::get('/admin/contact-delete/{id}', [AdminContactController::class, 'delete'])->name('admin_contact_delete');

        // AdminActivity page ////////////
        Route::get('/admin/all-activites', [AdminActivityController::class, 'all_activites'])->name('admin_all_activites');
        Route::get('/admin/activites-delete/{id}', [AdminActivityController::class, 'delete_activites'])->name('admin_activites_delete');

        // Admin Sport Activity page ////////////
        Route::get('/admin/sport-activites', [AdminActivityController::class, 'sport_activites'])->name('admin_sport_activites');
        Route::get('/admin/sport-activites-delete/{id}', [AdminActivityController::class, 'delete__sport_activites'])->name('admin_sport_activites_delete');


        //  Admin Social page ////////////
        Route::get('/admin/all-social-search', [AdminSocialController::class, 'all_social_search'])->name('admin_all_social_search');
        Route::get('/admin/all-social-search-delete/{id}', [AdminSocialController::class, 'delete_all_social_search'])->name('admin_all_social_search_delete');

});





// student middleware///////////////////////
Route::middleware(['student:student'])->group(function(){

    Route::get('social_search',[SocialSearch::class,'index'])->name('social_search');
    Route::get('activity_form/{id}',[ActivityController::class,'activity_form'])->name('activity_form');

});



// send activites
Route::post('activity/send-data',[ActivityController::class,'send_data'])->name('activity_send_data');


// send Social
Route::post('social/send-data',[SocialSearch::class,'send_data'])->name('social_send_data');
