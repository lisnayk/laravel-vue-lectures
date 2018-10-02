<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands= json_decode(file_get_contents(storage_path("data/brands.json"),1));

        foreach ($brands as $brand){
            $model=\App\Models\Brand::create(["brand_name"=>$brand]);


        }
    }
}
