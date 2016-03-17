<?php

use FengHaung\Citation;
use Illuminate\Database\Seeder;

/**
 * Seed for Citation table
 * @author Bruno Gasparin <bfgasparin@gmail.com>
 */
class CitationTableSeeder extends Seeder {

    public function run()
    {
    	factory(Citation::class, 1)->create(['first' => true]);
     	factory(Citation::class, 2)->create(['first' => false]);
    }

}