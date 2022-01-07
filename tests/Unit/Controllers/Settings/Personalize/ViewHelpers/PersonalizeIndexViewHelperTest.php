<?php

namespace Tests\Unit\Controllers\Settings\Personalize\ViewHelpers;

use function env;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\Settings\Personalize\ViewHelpers\PersonalizeIndexViewHelper;

class PersonalizeIndexViewHelperTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_gets_the_data_needed_for_the_view(): void
    {
        $array = PersonalizeIndexViewHelper::data();
        $this->assertEquals(
            [
                'url' => [
                    'settings' => env('APP_URL').'/settings',
                    'back' => env('APP_URL').'/settings',
                    'manage_relationships' => env('APP_URL').'/settings/personalize/relationships',
                    'manage_labels' => env('APP_URL').'/settings/personalize/labels',
                    'manage_genders' => env('APP_URL').'/settings/personalize/genders',
                    'manage_pronouns' => env('APP_URL').'/settings/personalize/pronouns',
                    'manage_address_types' => env('APP_URL').'/settings/personalize/addressTypes',
                    'manage_pet_categories' => env('APP_URL').'/settings/personalize/petCategories',
                    'manage_contact_information_types' => env('APP_URL').'/settings/personalize/contactInformationType',
                    'manage_templates' => env('APP_URL').'/settings/personalize/templates',
                ],
            ],
            $array
        );
    }
}