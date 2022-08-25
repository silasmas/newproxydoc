<?php

namespace App\Providers;

use App\Models\produit;
use App\Models\service;
use App\Models\categorie;
use App\Models\abonnement;
use App\Models\produitUser;
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

        View::composer('pages.mesAchats*', function ($view) {
            if (!Auth::guest()) {
                $m = Auth::user()->id;
                    $p= produitUser::where("user_id",$m)->get();
                    $mines = $p->filter(function ($value, $key) {
                        return $value->etat == "Payer";
                    });
                    //    dd($mines);
                $view->with('produitsAcheter', $mines);
            }
        });

        View::composer('*', function ($view) {
            if (!Auth::guest()) {
                $m = Auth::user()->abonnement;
                $mines = $m->filter(function ($value, $key) {
                    return $value->pivot->etat == "Payer";
                });

                $view->with('mesService', $mines);
            }
            $service = service::all();
            $produit = produit::with("categorie")->limit(10)->get();

            $acte = service::with('acte')->get();
            $abonnement = abonnement::with('service')->get();

            $avocatBy = $abonnement->groupBy(function ($member) {
                return $member;
            })->all();

            $c = collect($avocatBy);
            $view->with('abonnement', $avocatBy);
            $view->with('service', $service);
            $view->with('produits', $produit);
        });
    }
}
