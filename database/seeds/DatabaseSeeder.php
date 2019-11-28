<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(faq_seeder::class);
        $this->call(manu_kat_seeder::class);
        $this->call(menu_seeder::class);
        $this->call(stoliki_seeder::class);
        $this->call(rezerwacje_seeder::class);
        $this->call(godz_otwarcia_seeder::class);
    }
}
