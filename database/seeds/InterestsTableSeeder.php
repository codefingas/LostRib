<?php

use Illuminate\Database\Seeder;

class InterestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ( $i = 2; $i <= 10; $i++ ) {

            if ( $i == 6 || $i == 4 ) {

                $interest = new \App\Interest();
                $interest->source_id = $i;
                $interest->target_id = 1;

                $interest->save();
            } else {
                $interest = new \App\Interest();
                $interest->source_id = 1;
                $interest->target_id = $i;

                $interest->save();
            }
        }
    }
}
