<?php

namespace App\Http\Livewire;
use App\Models\Ad;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Carbon;

class AuthorAds extends Component
{

    use WithPagination;

    public $author;
    public $hour;
    public $day;
    public $month;
    public $year;

    // Da visionare!!!
    // public function mount($author) {
    //     $ads = Ad::where("is_accepted", $author->id)->paginate(6)->get();
    //     $this->ads = $ads;
    //     // dd($this->ads);
    // }

    public function render()
    {
        $this->now = Carbon::now();
        $id = $this->author->id;
        return view('livewire.author-ads', [
            "ads" => Ad::where("user_id", $id)->where("is_accepted", 1)->paginate(6)
        ]);
    }

    protected $paginationTheme = 'bootstrap';

}