<?php

namespace App\Http\Livewire;

use App\Jobs\AddWaterMarkLogo;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\GoogleVisionSearch;
use App\Jobs\RemoveFaces;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;

class AdForm extends Component
{
    use WithFileUploads;
    

    public $title;
    public $description;
    public $price;
    public $category;
    public $temporary_images;
    public $images = [];

    protected $rules = [
        'title' => 'required|min:1|max:20',
        'description' => 'required|min:1|max:255',
        'price' => 'required|numeric|max:9999999999',
        'category' => 'required|min:1',
        'images.*'=> 'required|image|max:1024',
        'temporary_images.*'=> 'required|image|max:2048',
    ];

    protected $messages = [
        'title.required' => 'Campo obbligatorio.',
        'title.max' => 'Hai raggiunto il numero massimo di caratteri.',
        'description.required' => 'Campo obbligatorio.',
        'description.max' => 'Hai raggiunto il numero massimo di caratteri.',
        'price.required' => 'Campo obbligatorio.',
        'price.max' => 'Hai raggiunto il numero massimo di caratteri.',
        'category.required' => 'Selezione obbligatoria.',
        'temporary_images.required' => 'Immagine obbligatoria',
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'Foto max 1 Mb',
        'images.image'=> 'I file devono essere immagini',
        'images.max' => 'Foto max 1 Mb'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    
    
    public function render()
    {
        return view('livewire.ad-form');
    }
    
    public function updatedTemporaryImages()
    {
        if($this->validate([
            'temporary_images.*'=> 'required|image|max:1024',
            ])){
                foreach($this->temporary_images as $image){
                    $this->images[]=$image;
                }
            }
        }

    public function restartCarousel(){
        $this->dispatchBrowserEvent('contentChanged');
    }
        
    public function removeImage($key)
    {
        if(in_array($key,array_keys($this->images)))
        {
            unset($this->images[$key]);
        }
    }
    
    public function submitAd() {
        if(count($this->images))
        {
            $validatedData = $this->validate();
            $category = Category::find($validatedData["category"]);
            $ad = $category->ads()->create([
                "title"=>$this->title,
                "description"=>$this->description,
                "price"=>$this->price
            ]);
            
            if(count($this->images)){
                foreach($this->images as $image){
                    // $ad->images()->create(['path'=>$image->store('images','public')]);
                    $newFileName = "ads/{$ad->id}";
                    $newImage = $ad->images()->create(['path'=>$image->store($newFileName,'public')]);
                    AddWaterMarkLogo::withChain([
                        //new AddWaterMarkLogo($newImage->id),
                        new ResizeImage($newImage->path,300,300),
                        //new RemoveFaces($newImage->id),
                        //new GoogleVisionSafeSearch($newImage->id),
                        //new GoogleVisionLabelImage($newImage->id),

                    ])->dispatch($newImage->id);

                }


                File::deleteDirectory(storage_path('/app/livewire-tmp'));
            }
            Auth::user()->ads()->save($ad);
            $this->formCleaner();
            return redirect('createAd')->with('message','Grazie, il tuo annuncio sarà sottoposto a revisione.');
        }else
        {
            session()->flash('alert','Inserire almeno un\'immagine');
        }
    }
    public function formCleaner() {
        $this->title = "";
        $this->description = "";
        $this->price = "";
        $this->category = "";
        $this->temporary_images=[];
        $this->images=[];
    }
        
        
    }
