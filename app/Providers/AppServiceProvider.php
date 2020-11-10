<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        View::share('name','bitm'); //sob view te data jabe
            
//Shudhu menu data pabe       
//        View::composer('frontEnd.include.menu', function($view){
//            $view->with('name','Basis-bitm');
//        });
    
// Shudhu menu te data pathate       
        View::composer('frontEnd.include.menu',function($view){
        $PublishedCategories=Category::where('publication_status',1)->get();
        $view->with('PubCategories',$PublishedCategories);
        });

// Sob View te ei Data pathate        
//        View::composer('*',function($view){
//        $PublishedCategories=Category::where('publication_status',1)->get();
//        $view->with('PubCategories',$PublishedCategories);
//        });
//        
    }
}
