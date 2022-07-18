<?php

namespace App\Http\Livewire;

use App\Models\Ad;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PrivateAds extends Component
{

    use WithPagination;

    public $now;

    public function render()
    {
        $this->now = Carbon::now();
        $id = Auth::user()->id;
        return view('livewire.private-ads', [
            "ads" => Ad::where("user_id", $id)->paginate(8)
        ]);
    }

    protected $paginationTheme = 'bootstrap';

}