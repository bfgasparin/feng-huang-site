<?php

use Illuminate\Database\Seeder;

/**
 * Seeder for application
 * @author Bruno Gasparin <bfgasparin@gmail.com>
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->call(ModalityTableSeeder::class);
        $this->call(CitationTableSeeder::class);
    }
}
