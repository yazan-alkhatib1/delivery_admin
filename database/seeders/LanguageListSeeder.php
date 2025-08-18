<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LanguageList;
use App\Models\LanguageDefaultList;
use App\Models\LanguageVersionDetail;
use App\Models\DefaultKeyword;
use App\Models\LanguageWithKeyword;

class LanguageListSeeder extends Seeder
{
    /**
     * Seed the language_lists table with Arabic as the only default language.
     *
     * @return void
     */
    public function run()
    {
        // Find Arabic in the default language list
        $defaultArabic = LanguageDefaultList::where('languageCode', 'ar')
            ->where('countryCode', 'ar-SA')
            ->first();
        if (!$defaultArabic) {
            $defaultArabic = LanguageDefaultList::where('languageCode', 'ar')->first();
        }

        if ($defaultArabic) {
            // Create or update Arabic as default, active, and RTL
            $arabic = LanguageList::firstOrCreate(
                [
                    'language_id'   => $defaultArabic->id,
                    'language_code' => 'ar',
                ],
                [
                    'language_name' => 'Arabic',
                    'country_code'  => $defaultArabic->countryCode ?? 'ar-SA',
                    'language_flag' => null,
                    'is_rtl'        => 1,
                    'status'        => 1,
                    'is_default'    => 1,
                ]
            );

            // Ensure Arabic is active, RTL, and set as default
            $changed = false;
            if ($arabic->status != 1) { $arabic->status = 1; $changed = true; }
            if ($arabic->is_rtl != 1) { $arabic->is_rtl = 1; $changed = true; }
            if ($arabic->is_default != 1) { $arabic->is_default = 1; $changed = true; }
            if ($changed) { $arabic->save(); }

            echo "Seeded Arabic (default) language in LanguageList with ID: {$arabic->id}\n";

            // Ensure LanguageVersionDetail default_language_id points to Arabic
            $version = LanguageVersionDetail::find(1);
            if ($version) {
                if ($version->default_language_id !== $arabic->id) {
                    $version->default_language_id = $arabic->id;
                    $version->save();
                }
            } else {
                // Create initial version if missing
                LanguageVersionDetail::create([
                    'default_language_id' => $arabic->id,
                    'version_no' => 1,
                ]);
            }

            // Backfill keywords for Arabic only
            $existingCount = LanguageWithKeyword::where('language_id', $arabic->id)->count();
            if ($existingCount == 0) {
                $defaultKeywords = DefaultKeyword::all(['screen_id','keyword_id','keyword_value']);
                foreach ($defaultKeywords as $dk) {
                    // Only create if not exists (safety if partially seeded)
                    $exists = LanguageWithKeyword::where([
                        'language_id' => $arabic->id,
                        'keyword_id'  => $dk->keyword_id,
                    ])->exists();
                    if (!$exists) {
                        LanguageWithKeyword::create([
                            'screen_id'     => $dk->screen_id,
                            'keyword_id'    => $dk->keyword_id,
                            'keyword_value' => $dk->keyword_value, // placeholder until real Arabic translations are provided
                            'language_id'   => $arabic->id,
                        ]);
                    }
                }
                echo "Backfilled " . count($defaultKeywords) . " language keywords for Arabic.\n";
            } else {
                echo "Arabic language keywords already exist (count: {$existingCount}). Skipping backfill.\n";
            }
        } else {
            echo "LanguageDefaultList has no Arabic entry. Please ensure LanguageDefaultListSeeder ran successfully.\n";
        }
    }
}
