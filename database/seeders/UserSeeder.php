<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function __construct(private readonly User $user)
    {
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->user->factory()->admin()->create();
    }
}
