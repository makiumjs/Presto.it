<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Mail\isRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function toRevisorDashboard()
    {
        return view('revisor.revisorDashboard');
    }

    public function toRevisorDetailAd(Ad $ad)
    {
        return view('revisor.revisorDetailsAd',compact('ad'));
    }

    public function toJoinUs()
    {  
        return view('revisor.joinUs');
    }

    public function mailbecameRevisor()
    {
        if(Auth::user()->is_revisor==1){
            return redirect()->back()->with('alert','Sei già un revisore');
        }
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message','Abbiamo preso in carico la tua richiesta, riceverai una mail in caso di accettazione.');
    }

    public function createRevisor(User $user){
        Artisan::call('presto:makeUserRevisor',['email'=>$user->email]);
        Mail::to($user->email)->send(new isRevisor($user));
        return redirect('/')->with('message','Complimenti! Hai l\'utente è diventato revisore');
    }
    
    public function acceptAd(Ad $ad)
    {
        $id=Auth::user()->id;
        $ad->setAccepted(true);
        $ad->setRevisedBy($id);
        return redirect(route('revisorDashboard'))->with('message','Annuncio accettato');
    }

    public function rejectAd(Ad $ad)
    {
        $id=Auth::user()->id;
        $ad->setAccepted(false);
        $ad->setRevisedBy($id);
        return redirect(route('revisorDashboard'))->with('message','Annuncio rifiutato');
    }
}
