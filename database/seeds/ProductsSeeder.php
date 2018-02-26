<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;
use League\Csv\Statement;

class ProductsSeeder extends Seeder
{

    public function run()
    {
        $stream = fopen(base_path() . '/public/csv/cakes.csv', 'r');
        $csv = Reader::createFromStream($stream);


        $records = (new Statement())->process($csv);
        foreach ($records as $record)
            DB::table('products')->insert(
                array(
                    'name' => $record[0],
                    'description' => $record[1],
                    'price_for_kg' => floatval($record[2]),
                    'servings_count' => ($record[3]) > 0 ? $record[3] : null,
                    'weight' => floatval($record[4]),
                    'price' => count($record[5]) > 0 ? $record[5] : null,
                    'image' => 'images/'.$record[6]
                )
            );
    }
}
