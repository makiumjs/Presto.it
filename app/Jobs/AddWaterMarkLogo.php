<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class AddWaterMarkLogo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    private $ad_image_id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($ad_image_id)
    {
        $this->ad_image_id = $ad_image_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $i = Image::find($this->ad_image_id);
        if (!$i) {
            return;
        }
        
        $srcPath =storage_path(('app/public/' . $i->path));

        $image = SpatieImage::load($srcPath);

        $image->watermark(base_path('public/media/Watermark_Presto.png'))
              ->watermarkPosition(Manipulations::POSITION_TOP)
              ->watermarkHeight(25,Manipulations::UNIT_PERCENT)
              ->watermarkWidth(50,Manipulations::UNIT_PERCENT)
              ->apply()
              ->watermark(base_path('public/media/Watermark_Presto.png'))
              ->watermarkPosition(Manipulations::POSITION_LEFT)
              ->watermarkHeight(25,Manipulations::UNIT_PERCENT)
              ->watermarkWidth(50,Manipulations::UNIT_PERCENT)
              ->apply()
              ->watermark(base_path('public/media/Watermark_Presto.png'))
              ->watermarkPosition(Manipulations::POSITION_RIGHT)
              ->watermarkHeight(25,Manipulations::UNIT_PERCENT)
              ->watermarkWidth(50,Manipulations::UNIT_PERCENT)
              ->apply()
              ->watermark(base_path('public/media/Watermark_Presto.png'))
              ->watermarkPosition(Manipulations::POSITION_BOTTOM)
              ->watermarkHeight(25,Manipulations::UNIT_PERCENT)
              ->watermarkWidth(50,Manipulations::UNIT_PERCENT)
              ->apply();
        
        $image->save();

    }
}   
