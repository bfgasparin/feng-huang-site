<?php

use FengHaung\Modality;
use Illuminate\Database\Seeder;

/**
 * Seed for Modality table
 * @author Bruno Gasparin <bfgasparin@gmail.com>
 */
class ModalityTableSeeder extends Seeder {

    public function run()
    {
     	factory(Modality::class, 3)->create();
    }

}