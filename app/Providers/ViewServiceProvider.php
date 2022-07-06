<?php
 
namespace App\Providers;

use App\Models\produit;
use App\Models\service;
use App\Models\categorie;
use App\Models\abonnement;
use App\Models\serviceAbonnement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
    
        View::composer('pages.*', function ($view) {
            if(!Auth::guest()){
                $m = Auth::user()->abonnement;
                $mines = $m->filter(function ($value, $key) {
                    return $value->pivot->etat == "Payer";
                });
                //$service=abonnement::with("service")->get();
            //    $ser= $s->each(function($role)
            //    {
            //        return $role->abonnement->id=="1";
            //    });
                //$r=$service->merge($mines);
                // dd($mines);
                $view->with('mesService',$mines);
            }
           $service=service::all();
           $produit=produit::with("categorie")->limit(10)->get();
        //    $produits=produit::with("categorie")->whereHas("categorie",function($q){
        //     $q->where("slug",request()->cat);
        // })->orderBy("created_at","DESC")->paginate(6);
        //  dd($produit);
          
           $acte=service::with('acte')->get();
           $abonnement=abonnement::with('service')->get();



           $avocatBy = $abonnement->groupBy(function ($member) {
                   return $member;
               })->all();

            $c=collect($avocatBy);
            
           $view->with('abonnement',$avocatBy);
           $view->with('service',$service);
           $view->with('produits',$produit);

        }); 
    }
}