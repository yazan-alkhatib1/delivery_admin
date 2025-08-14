<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LanguageList;
use App\Models\LanguageDefaultList;
use App\Models\LanguageVersionDetail;

class LanguageListSeeder extends Seeder
{
    /**
     * Seed the language_lists table with at least English language so that
     * the language-table-list API can return data.
     *
     * @return void
     */
    public function run()
    {
        // Try to find the default list entry for English (United States)
        $defaultEnglish = LanguageDefaultList::where('languageCode', 'en')
            ->where('countryCode', 'en-US')
            ->first();

        // If specific en-US not found, fallback to any English entry
        if (!$defaultEnglish) {
            $defaultEnglish = LanguageDefaultList::where('languageCode', 'en')->first();
        }

        if (!$defaultEnglish) {
            // If for some reason default list isn't seeded yet, just bail gracefully.
            echo "LanguageDefaultList has no English entry. Please run LanguageDefaultListSeeder first.\n";
            return;
        }

        // Ensure there is at least one active English language in LanguageList
        $language = LanguageList::firstOrCreate(
            [
                'language_id'   => $defaultEnglish->id,
                'language_code' => 'en',
            ],
            [
                'language_name' => 'English',
                'country_code'  => $defaultEnglish->countryCode ?? 'en-US',
                'language_flag' => null,
                'is_rtl'        => 0,
                'status'        => 1,
                'is_default'    => 1,
            ]
        );

        // If the record existed but was inactive or not default, make sure it's active/default
        if ($language->status != 1 || $language->is_default != 1) {
            $language->status = 1;
            $language->is_default = 1;
            $language->save();
        }

        // Make sure LanguageVersionDetail default_language_id points to English
        $version = LanguageVersionDetail::find(1);
        if ($version) {
            if ($version->default_language_id !== $language->id) {
                $version->default_language_id = $language->id;
                $version->save();
            }
        } else {
            // Create initial version if missing
            LanguageVersionDetail::create([
                'default_language_id' => $language->id,
                'version_no' => 1,
            ]);
        }

        echo "Seeded English language in LanguageList with ID: {$language->id}\n";
    }
}
