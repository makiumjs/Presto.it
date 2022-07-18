<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories_it=[
            'Elettronica','Motori','Per la casa','Moda','Sport','Bricolage','Libri e musica','Videogiochi'
        ];
        $categories_en=[
            'Electronics','Motors','Forniture','Fashion','Sport','Bricolage','Books and music','Gaming'
        ];
        $categories_es=[
            'Electrónica','Automotor','Para la casa','Moda','Sport','Bricolage','Libros y Musica','juego de azar'
        ];
        $categories_fr=[
            'Électronique','Moteurs','Pour la maison','Mode','Sport','Bricolage','Livres et Musique','jeu vidéo'
        ];
        $categories_pt=[
            'Eletrônicos', 'Motores', 'Para a Casa', 'Moda', 'Esportes', 'bricolagem', 'Livros e música', 'Jogos'
        ];
        $categories_ke=[
            'Elektroniki', 'Motors', 'Nyumbani', 'Fashion', 'Sports', 'DIY', 'Vitabu na Muziki', 'michezo ya kubahatisha'
        ];

        $imgs=[
            '/../media/categoryElettronica.png','/../media/categoryMotori.png','/../media/categoryPerLaCasa.png','/../media/categoryModa.png','/../media/categorySport.png','/../media/categoryBricolage.png','/../media/categoryLibri.png','/../media/categoryVideogiochi.png'
        ];

        $icons=[
            'fa-solid fa-laptop fa-2x', 'fa-solid fa-car-rear fa-2x', 'fa-solid fa-house-chimney fa-2x', 'fa-solid fa-vest-patches fa-2x', 'fa-solid fa-dumbbell fa-2x', 'fa-solid fa-screwdriver-wrench fa-2x', 'fa-solid fa-headphones-simple fa-2x', 'fa-solid fa-gamepad fa-2x' 
        ];

        $index=0;

        foreach($categories_it as $category){
            
            DB::table('categories')->insert([
                'category_it' =>$category,
                'category_en' =>$categories_en[$index],
                'category_es' =>$categories_es[$index],
                'category_fr' =>$categories_fr[$index],
                'category_ke' =>$categories_ke[$index],
                'category_pt' =>$categories_pt[$index],
                'img' =>$imgs[$index],
                'category_icon' => $icons[$index],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]);
            $index++;
        }
    }
}
