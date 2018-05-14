<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use sisVentas\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
          $data = array(
        [
            'name' => 'Super heroes',
            'slug' => 'super heroes',
            'description' => 'super,cansar,strong,sdsds',
            'color' => '#440022'
        ],
        [
            'name' => 'Geek',
            'slug' => 'geek',
            'description' => 'super,cansar,strong,sdsds',
            'color' => '#445500'
        
        ]

        );

        Category::insert($data);
    }

    }