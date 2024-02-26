<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bookshop;
use Illuminate\Support\Facades\DB;

class BookshopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshops')->truncate();
        
        $bookshops = [
    'Prague' => [
        'Knihy Dobrovský',
        'Kosmas',
        'Neoluxor'
    ],
    'London' => [
        'Blackwell\'s',
        'Daunt Books',
        'Foyles',
        'John Smith & Son',
        'W H Smith',
        'Waterstones',
        'The Works'
    ],
    'New York' => [
        'Amazon Books',
        'Anderson\'s Bookshops',
        'Barnes & Noble',
        'Bookmans',
        'Books-A-Million',
        'Books, Inc.',
        'Deseret Book, also operates Seagull Book',
        'Follett\'s',
        'Half Price Books',
        'Hudson News',
        'Joseph-Beth Booksellers',
        'Kinokuniya',
        'Mardel Christian Stores',
        'Powell\'s Books',
        'Schuler Books & Music',
        'Tattered Cover'
    ]
];

    foreach ($bookshops as $city => $shop_name_array) {
        foreach ($shop_name_array as $key => $shop_name) {
            $bookshop = new Bookshop;
            $bookshop->city =$city;
            $bookshop->name =$shop_name;
            $bookshop->save();
        }
    }

    }
}