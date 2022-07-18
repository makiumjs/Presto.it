<?php

namespace App\Http\Livewire;

use App\Models\Ad;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\SessionManager;

class RevisorDashboard extends Component
{
    public $ads_accepted;
    public $ads_rejected;
    public $userId;
    protected $listeners = ['refreshComponent' => 'refresh'];

    public function mount()
    {
        $this->userId=Auth::user()->id;
        $ads_accepted=Ad::where('is_accepted', 1)->where('revised_by',$this->userId)->latest()->get();
        $this->ads_accepted=$ads_accepted;
        $ads_rejected=Ad::where('is_accepted', 0)->where('revised_by',$this->userId)->latest()->get();
        $this->ads_rejected=$ads_rejected;

    }


    public function setToRevise(Ad $ad)
    {
        $ad->setToRevise();
        $this->emit('refreshComponent');
    }


    public function refresh(){
        $this->ads_accepted=Ad::where('is_accepted', 1)->where('revised_by',$this->userId)->latest()->get();
        $this->ads_rejected=Ad::where('is_accepted', 0)->where('revised_by',$this->userId)->latest()->get();

    }

    // public function adsAcceptedAll()
    // {
    //     $ads_accepted=Ad::where('is_accepted',1)->get();
    //     return compact('ads_accepted');
    // }

    // public function adsRejectedAll()
    // {
    //     $ads_rejected=Ad::where('is_accepted', 0)->latest()->get();
    //     return compact('ads_rejected');
    // }


    public function render()
    {
        $ads_to_revise=Ad::where('is_accepted', null)->latest()->get();
       
        return view('livewire.revisor-dashboard',compact('ads_to_revise'));
    }
}
