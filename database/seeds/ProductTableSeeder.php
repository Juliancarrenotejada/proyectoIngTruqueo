<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use sisVentas\Product;

class ProductTableSeeder extends Seeder
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
            'name' => 'playera1',
            'slug' => 'playera',
            'description' => 'lorem10 dsfhjsdfkjshdflknsvnsjskdj',
            'extract' => 'loref',
             'price' => 34.535,
              'image' => 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Blue_Distressed_Superman_Logo_T_Shirt_hi_res.jpg',
              'visible' => 1,
              'created_at' => new DateTime,
              'updated_at' => new DateTime,
              'category_id' => 1
        ],

        [
        'name'      => 'Playera 2',
        'slug'      => 'playera-2',
        'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
        'extract'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'price'     => 255.00,
        'image'     => 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Blue_Distressed_Superman_Logo_T_Shirt_hi_res.jpg',
        'visible'     => 1,
        'created_at'  => new DateTime,
        'updated_at'  => new DateTime,
        'category_id'   => 1
      ],

      [
        'name'      => 'Playera 3',
        'slug'      => 'playera-3',
        'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
        'extract'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'price'     => 300.00,
        'image'     => 'http://img5a.flixcart.com/image/t-shirt/f/g/q/fsbk-bruce-lee-sayitloud-xl-700x700-imadtkffxfhgsday.jpeg',
        'visible'     => 1,
        'created_at'  => new DateTime,
        'updated_at'  => new DateTime,
        'category_id'   => 1
      ],
      
      [
        'name'      => 'Playera 4',
        'slug'      => 'playera-4',
        'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
        'extract'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'price'     => 475.00,
        'image'     => 'http://rlv.zcache.com/funny_computer_geek_t_shirt_tshirt-r537052a6a7b94b028e47b274c099fe24_804g5_324.jpg',
        'visible'     => 1,
        'created_at'  => new DateTime,
        'updated_at'  => new DateTime,
        'category_id'   => 2
      ],   

        );
          Product::insert($data);
    }
}

?>