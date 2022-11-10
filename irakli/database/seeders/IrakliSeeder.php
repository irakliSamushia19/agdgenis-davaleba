<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Irakli;

class IrakliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Irakli::create([
            "title" => "სიყვარული იპოდრომზე",
            "body" => "lorem imsum dolor lorem lorem lorem lorem",
            "author" => 'ნუგო ნატროშვილი',
            "active" => 0
        ]);
        Irakli::create([
            "title" => "მზე მთვარე და პურის ყანა",
            "body" => "lorem imsum dolor lorem lorem lorem lorem",
            "author" => 'ნუგო ნატროშვილი',
            "active" => 1
        ]);
        Irakli::create([
            "title" => "ჯინსების თაობა",
            "body" => "lorem imsum dolor lorem lorem lorem lorem",
            "author" => 'ნუგო ნატროშვილი',
            "active" => 1
        ]);
        Irakli::create([
            "title" => "ხიდი ტერაბითიაში",
            "body" => "lorem imsum dolor lorem lorem lorem lorem",
            "author" => 'ნუგო ნატროშვილი',
            "active" => 0
        ]);
        Irakli::create([
            "title" => "ნეირომანსერი",
            "body" => "lorem imsum dolor lorem lorem lorem lorem",
            "author" => 'ნუგო ნატროშვილი',
            "active" => 0
        ]);
        Irakli::create([
            "title" => "ამერიკელი ღმერთი",
            "body" => "lorem imsum dolor lorem lorem lorem lorem",
            "author" => 'ნუგო ნატროშვილი',
            "active" => 1
        ]);
        Irakli::create([
            "title" => "სიკვდილი ნილოსზე",
            "body" => "lorem imsum dolor lorem lorem lorem lorem",
            "author" => 'ნუგო ნატროშვილი',
            "active" => 0
        ]);
        Irakli::create([
            "title" => "სამი მუშკეტერი",
            "body" => "lorem imsum dolor lorem lorem lorem lorem",
            "author" => 'ნუგო ნატროშვილი',
            "active" => 1
        ]);
        Irakli::create([
            "title" => "იგი",
            "body" => "lorem imsum dolor lorem lorem lorem lorem",
            "author" => 'ნუგო ნატროშვილი',
            "active" => 0
        ]);
    }
}
