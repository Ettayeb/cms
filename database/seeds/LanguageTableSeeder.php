<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguageTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('languages')->delete();
        Language::create(['title' => 'English', 'code' => 'en', 'site_title' => 'Blog', 'site_description' => 'My awesome Blog']);
    }

}