<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Funko Pop'
        ]);
        Category::create([
            'name'=>'Games'
        ]);
        Category::create([
            'name'=>'Consoles'
        ]);
        Category::create([
            'name'=>'Accessoires'
        ]);
        Category::create([
            'name'=>'Digital Content'
        ]);
    }
}
