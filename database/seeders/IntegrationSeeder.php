<?php

namespace Database\Seeders;

use App\Models\Integration;
use Illuminate\Database\Seeder;

class IntegrationSeeder extends Seeder
{
    public function __construct(private readonly Integration  $integration)
    {
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    }
}
