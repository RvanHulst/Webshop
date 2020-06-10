<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'Alfredo Linguini',
            'image'=>'../img/Funko Pop/AlfredoFunkoPop.jpg',
            'description'=>'
            ALFREDO LINGUINI UIT DISNEY RATATOUILLE ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>40.00,
            'category_id'=>1
        ]);
        Product::create([
             'name'=>'Spiderman Homemade Suit',
             'image'=>'../img/Funko Pop/SpiderFunkoPop.jpg',
             'description'=>'
             SPIDERMAN UIT SPIDERMAN HOME COMING ALS FUNKO POP FIGUUR.
             GROOTTE CA. 10 CM
             MATERIAAL: KUNSTSTOF
             NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
             'price'=>20.00,
             'category_id'=>1
        ]);     
        Product::create([
            'name'=>'Elton John',
            'image'=>'../img/Funko Pop/EltonFunkoPop.jpg',
            'description'=>'
            ELTON JOHN DE GROOTSTE POP EN ROCK STAR ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>20.00,
            'category_id'=>1
       ]);     
       Product::create([
            'name'=>'Gloria Delgado-Pritchett',
            'image'=>'../img/Funko Pop/GloriaFunkoPop.jpg',
            'description'=>'
            GLORIA DELGADO-PRITCHETT UIT MODERN FAMILY ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>10.00,
            'category_id'=>1
       ]);  
       Product::create([
            'name'=>'Octo Tentakel',
            'image'=>'../img/Funko Pop/OctoFunkoPop.jpg',
            'description'=>'
            OCTO TENTAKEL UIT SPONGEBOB SQUAREPANTS ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>30.00,
            'category_id'=>1
       ]);        
       Product::create([
            'name'=>'Peter Pettigrew',
            'image'=>'../img/Funko Pop/PeterFunkoPop.jpg',
            'description'=>'
            PETER PETTIGREW UIT HARRY POTTER ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>10.00,
            'category_id'=>1
       ]);     
       Product::create([
            'name'=>'Wreck It Ralph',
            'image'=>'../img/Funko Pop/RalfFunkoPop.jpg',
            'description'=>'
            WRECK IT RALPH UIT WRECK IT RALPH ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>20.00,
            'category_id'=>1
        ]);     
        Product::create([
            'name'=>'Rey',
            'image'=>'../img/Funko Pop/ReyFunkoPop.jpg',
            'description'=>'
            REY UIT STAR WARS ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>20.00,
            'category_id'=>1
        ]);   
        Product::create([
            'name'=>'Thanos',
            'image'=>'../img/Funko Pop/ThanosFunkoPop.jpg',
            'description'=>'
            THANOS UIT DE MARVEL FILMS ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>20.00,
            'category_id'=>1
        ]);   
        Product::create([
            'name'=>'The Child',
            'image'=>'../img/Funko Pop/YodaFunkoPop.jpg',
            'description'=>'
            THE CHILD UIT THE MANDALORIAN ALS FUNKO POP FIGUUR.
            GROOTTE CA. 10 CM
            MATERIAAL: KUNSTSTOF
            NIET GESCHIKT VOOR KINDEREN ONDER DE 3 JAAR',
            'price'=>100.00,
            'category_id'=>1
        ]);   
    }
}
