<?php

namespace Database\Seeders;

use Database\Factories\ItemsFactory;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class ItemsSeeder extends Seeder
{
    public function run()
    {
        ItemsFactory::factory()->count(10)->create();
    }
}
