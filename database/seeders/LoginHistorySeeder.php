<?php

namespace Database\Seeders;

use App\Models\LoginHistory;
use Illuminate\Database\Seeder;

class LoginHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LoginHistory::factory(200)->create();
    }
}
