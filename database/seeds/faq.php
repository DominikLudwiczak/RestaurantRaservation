<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class faq extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question' => 'Czym jest Lorem Ipsum?',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates possimus molestias error eos fuga sint perferendis earum quasi doloribus hic recusandae, minima, nesciunt vero magnam nihil totam expedita! Ipsum, quam.'
        ]);
    }
}
