<?php

namespace Database\Seeders;

use App\Models\LanguageDefaultList;
use App\Models\LanguageList;
use Illuminate\Database\Seeder;

class LanguageListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all languages from LanguageDefaultList
        $defaultLanguages = LanguageDefaultList::all();

        if ($defaultLanguages->isEmpty()) {
            echo "No languages found in LanguageDefaultList table. Make sure LanguageDefaultListSeeder runs first.\n";
            return;
        }

        // Populate LanguageList table based on LanguageDefaultList data
        foreach ($defaultLanguages as $defaultLanguage) {
            LanguageList::create([
                'language_id' => $defaultLanguage->id,
                'language_name' => $defaultLanguage->languageName,
                'language_code' => $defaultLanguage->languageCode,
                'country_code' => $defaultLanguage->countryCode,
                'is_rtl' => 0, // Default value
                'status' => 1, // Default value
                'is_default' => ($defaultLanguage->languageCode === 'en') ? 1 : 0, // Make English the default language
            ]);
        }

        echo "LanguageList table populated successfully.\n";
    }
}
