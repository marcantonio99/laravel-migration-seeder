<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'start_city'=>'Mesagne',
                'end_city'=>'Napoli',
            ],
            [
                'start_city'=>'Gallipoli',
                'end_city'=>'Lecce',
            ],
        ];

        foreach ($trains as $elem) {
            $newTrains = new Train();
            $newTrains->start_city = $elem['start_city'];
            $newTrains->end_city = $elem['end_city'];
        }
    }
}
