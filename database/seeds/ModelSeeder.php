<?php

use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = json_decode(file_get_contents(storage_path("data/models.json")));

        foreach ($brands as $barnd) {
            $brand = \App\Models\Brand::firstOrCreate(['brand_name' => $barnd->brand]);
            foreach ($barnd->models as $model) {
                App\Models\Model::create(['model_name' => $model, "brand_id" => $brand->id]);
            }
        }
    }

}
