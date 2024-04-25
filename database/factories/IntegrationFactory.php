<?php

namespace Database\Factories;

use App\Models\Enums\IntegrationStatusEnum;
use App\Models\Integration;
use App\Services\Instagram\Contracts\InstagramService;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Integration>
 */
class IntegrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->name();

        return [
            'name'        => $name,
            'key'         => Str::slug($name),
            'description' => $this->faker->text(),
            'status'      => $this->faker->randomElement(IntegrationStatusEnum::values()),
            'logo'        => $this->faker->image(),
        ];
    }

    public function active(): static
    {
        return $this->state(fn(array $attributes) => [
            'status' => IntegrationStatusEnum::ACTIVE,
        ]);
    }

    public function inative(): IntegrationFactory
    {
        return $this->state(fn(array $attributes) => [
            'status' => IntegrationStatusEnum::INACTIVE,
        ]);
    }

    public function development(): IntegrationFactory
    {
        return $this->state(fn(array $attributes) => [
            'status' => IntegrationStatusEnum::DEVELOPMENT,
        ]);
    }

    public function instagram(): IntegrationFactory
    {
        return $this->state(fn(array $attributes) => [
            'name'        => InstagramService::NAME,
            'key'         => InstagramService::KEY,
            'description' => InstagramService::DESCRIPTION,
            'logo'        => '/images/integrations/instagram.png',
        ]);
    }
}
