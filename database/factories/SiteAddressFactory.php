<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteAddress>
 */
class SiteAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $countryCodes = ['+20', '+966', '+971', '+1'];
        $code1 = $this->faker->randomElement($countryCodes);
        $code2 = $this->faker->randomElement($countryCodes);

        return [
            'title_ar' => $this->faker->company . ' العربية',
            'title_en' => $this->faker->company,
            'address_ar' => $this->faker->address . ' العربية',
            'address_en' => $this->faker->address,
            'email' => $this->faker->safeEmail,
            'phone' => $code1 . $this->faker->numerify('##########'),
            'phone2' => $code2 . $this->faker->numerify('##########'),
            'map_url' => $this->faker->url,
            'order' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->boolean(90),
        ];
    }
}
