<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    use HasFactory, Searchable;


    protected $fillable = [
        'title','price','description'
    ];

    // Indicization for TNTsearch

    public function toSearchableArray()
    {
        $category = $this->category;
        $array =[
            'id' => $this->id,
            'title'=> $this->title,
            'body' => $this->description,
            'category' => $category,
        ];

        return $array;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public static function toBeRevisionedCount()
    {
        return Ad::where('is_accepted', null)->count();
    }

    public static function AcceptedCount()
    {
        return Ad::where('is_accepted', 1)->count();
    }

    public static function AcceptedByRevisorCount($id)
    {
        return Ad::where('is_accepted', 1)->where('revised_by',$id)->count();
    }

    public static function notAcceptedByRevisorCount($id)
    {
        return Ad::where('is_accepted', 0)->where('revised_by',$id)->count();
    }

    public static function notAcceptedCount()
    {
        return Ad::where('is_accepted', 0)->count();
    }

    public function setAccepted($bool)
    {
        $this->is_accepted = $bool;
        $this->save();
        return true;
    }
    public function setRevisedBy($id)
    {
        $this->revised_by = $id;
        $this->save();
        return true;
    }
    public function setToRevise()
    {
        $this->is_accepted = null;
        $this->save();
        return true;
    }
    
}
