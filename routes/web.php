<?php

use Illuminate\Support\Facades\Route;

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
Route::group([ "as"=>'user.' , "prefix"=>'user' , "namespace"=>'user' , "middleware"=>['auth','user']],function(){
      Route::get('dashboard','userDashbordController@index')->name('dashboard');

      Route::post('recipe-store','recipeController@recipe_store')->name('recipe.recipe-store');
      Route::get('all-post/{id}','recipeController@recipe_all');
      Route::get('logout','userDashbordController@logout');

      Route::get('single-user/{id}','userDashbordController@single_user');

      Route::post('cart-store/{id}','cartController@cart_store');
      Route::get('cart-all-product','cartController@cart_product_all');
      Route::get('order','cartController@order');

      Route::post('quantity/{id}','cartController@update');
      Route::get('delete/{id}','cartController@delete');

      Route::get('paypal','cartController@paypal');

      Route::post('paypal-order','orderController@paypal_order');
      Route::post('withdrow','withdrowController@withdrow');




});



//stripe
Route::post('stripe-payment','PaymentController@store')->name('stripe.store');




//user profile
Route::get('user-profile','user\userDashbordController@all_user');
Route::get('earn-money','user\userDashbordController@earn');
Route::get('user_post_add/','user\userDashbordController@post_add');





//Privacy policy for registraion
Route::get('Privacy-policy','user\userDashbordController@privaciy');





//category ways recipe show
Route::get('category-ways-recipe/{id}','user\recipeController@category_ways_show_recipe');
Route::get('single-recipe/{id}','user\recipeController@single_recipe');
Route::get('single-view-recipe/{id}','user\recipeController@single_view_recipe');
Route::get('recipe-like/{id}','user\recipeController@recipe_like');
Route::get('all-category','user\recipeController@all_category');




//blog
Route::get('blog-all','user\blogController@all_blog');
Route::get('single-blog/{id}','user\blogController@single_blog');



//about
Route::get('about','user\userDashbordController@about');
Route::get('contact','user\userDashbordController@contact');


//message
Route::post('message-submition','user\messageController@message_store');



//community
Route::get('community','user\userDashbordController@community')->name('community');



//serch
Route::post('search','user\userDashbordController@search');


//subscriber
Route::post('subscriber-store','user\subscriberController@subscriber_store');


//socilite route
Route::get('auth/{provider}','auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback','auth\LoginController@handleProviderCallback');


Route::get('/', 'user\userDashbordController@index');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');













Route::group([ "as"=>'admin.' , "prefix"=>'admin' , "namespace"=>'admin' , "middleware"=>['auth','admin']],function(){
  Route::get('dashboard', 'AdminDashboardController@index')->name('dashboard');

  //MESSAGE OPTION
  Route::post('message/{id}', 'messageController@index');
  Route::get('all-message', 'messageController@all_message')->name('all-message');
  Route::get('delete-message/{id}', 'messageController@delete_message');
  //NOTIFICATION
  Route::get('all-notification', 'notificationController@all_notification')->name('all-notification');


  Route::group([ "as"=>'RecipeCategory.' , "prefix"=>'RecipeCategory'],function(){
    Route::get('category-view', 'recipeCategoryController@index')->name('category-view');
    Route::get('category-add', 'recipeCategoryController@category_add')->name('category-add');
    Route::post('category-store', 'recipeCategoryController@category_store')->name('category-store');
    Route::get('unactive/{id}', 'recipeCategoryController@unactive');
    Route::get('active/{id}', 'recipeCategoryController@active');
    Route::get('edit/{id}', 'recipeCategoryController@edit');
    Route::post('category-update/{id}', 'recipeCategoryController@category_update');
    Route::get('category-delete/{id}', 'recipeCategoryController@category_delete');
  });


  Route::group([ "as"=>'Recipe.' , "prefix"=>'Recipe'],function(){
    Route::get('recipe-view', 'recipeController@index')->name('recipe-view');
    Route::get('recipe-add', 'recipeController@recipe_add')->name('recipe-add');
    Route::post('recipe-store', 'recipeController@recipe_store')->name('recipe-store');
    Route::get('unactive/{id}', 'recipeController@unactive');
    Route::get('active/{id}', 'recipeController@active');
    Route::get('recipe-edit/{id}', 'recipeController@recipe_edit');
    Route::post('recipe-update/{id}', 'recipeController@recipe_update');
    Route::get('recipe-delete/{id}', 'recipeController@recipe_delete');
    Route::get('recipe-single/{id}', 'recipeController@recipe_single');

    Route::get('pending-recipe', 'recipeController@pending_recipe')->name('pending-recipe');
  });



  Route::group([ "as"=>'FeaturedRecipe.' , "prefix"=>'FeaturedRecipe'],function(){
    Route::get('featuredrecipe-view', 'featuredRecipeController@view')->name('featuredrecipe-view');
    Route::get('featuredrecipe-add', 'featuredRecipeController@add')->name('featuredrecipe-add');
    Route::post('featuredrecipe-store', 'featuredRecipeController@store')->name('featuredrecipe-store');
    Route::get('unactive/{id}', 'featuredRecipeController@unactive');
    Route::get('active/{id}', 'featuredRecipeController@active');
    Route::get('featuredrecipe-edit/{id}', 'featuredRecipeController@featuredrecipe_edit');
    Route::post('featuredrecipe-update/{id}', 'featuredRecipeController@featuredrecipe_update');
    Route::get('featuredrecipe-single/{id}', 'featuredRecipeController@featuredrecipe_single');
    Route::get('featuredrecipe-delete/{id}', 'featuredRecipeController@featuredrecipe_delete');


  });

  Route::group([ "as"=>'order.' , "prefix"=>'order'],function(){
    Route::get('order-list', 'orderController@index')->name('order-list');
    Route::get('single-view-product/{id}', 'orderController@single_view');
    Route::post('cart-quantity/{id}', 'orderController@update');
    Route::get('delete-cart/{id}', 'orderController@delete');

    Route::get('success/{id}', 'orderController@successfull');
    Route::get('single-delete-product/{id}', 'orderController@order_delete');

    Route::get('user20%-list', 'orderController@user_payment')->name('user20%-list');
    Route::get('get-payment20%/{id}','orderController@view_profile');
    Route::get('confirm-order/{id}','orderController@confirm_order');
    Route::get('cart-status/{id}','orderController@cart_status');
    /*
    Route::get('frecipe-edit/{id}', 'futurerecipeController@frecipe_edit');
    Route::post('frecipe-update/{id}', 'futurerecipeController@frecipe_update');
    Route::get('frecipe-delete/{id}', 'futurerecipeController@frecipe_delete');
    Route::get('frecipe-single/{id}', 'futurerecipeController@frecipe_single');
*/

  });





  Route::group([ "as"=>'blog.' , "prefix"=>'blog'],function(){
    Route::get('blog-view', 'blogController@index')->name('blog-view');
    Route::get('blog-add', 'blogController@blog_add')->name('blog-add');
    Route::post('blog-store', 'blogController@blog_store')->name('blog-store');
    Route::get('unactive/{id}', 'blogController@unactive');
    Route::get('active/{id}', 'blogController@active');
    Route::get('blog-edit/{id}', 'blogController@blog_edit');
    Route::post('blog-update/{id}', 'blogController@blog_update');
    Route::get('blog-delete/{id}', 'blogController@blog_delete');
    Route::get('blog-single/{id}', 'blogController@blog_single');
  });

  Route::group([ "as"=>'user.' , "prefix"=>'user'],function(){
    Route::get('all-user', 'alluserController@all_user')->name('all-user');
    Route::get('delete/{id}', 'alluserController@delete');
    Route::get('user-single/{id}', 'alluserController@user_singel_view');
  });



  Route::group([ "as"=>'admin.' , "prefix"=>'admin'],function(){
    Route::get('all-admin', 'alluserController@all_admin')->name('all-admin');
    Route::get('delete/{id}', 'alluserController@delete');
    Route::get('user-single/{id}', 'alluserController@user_singel_view');
  });




Route::get('update-profile', 'settingController@update_profile')->name('update-profile');
Route::get('Password-change', 'settingController@Password_change')->name('Password-change');
Route::get('new-admin', 'settingController@new_admin')->name('new-admin');
Route::post('register-store', 'settingController@register_admin')->name('register-store');
Route::post('update-register/{id}', 'settingController@update_register_admin');
Route::get('Subscriber', 'settingController@Subscriber')->name('Subscriber');//all subscripber list setting controller  useing
Route::get('logout', 'settingController@logout');
Route::post('change-password', 'settingController@change_password');

Route::post('logout', 'settingController@logout');

});
