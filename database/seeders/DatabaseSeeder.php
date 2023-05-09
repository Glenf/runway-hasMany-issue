<?php

namespace Database\Seeders;

use App\Models\StandardParent;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $parent = StandardParent::factory()->count(10)->create();

        $parent->each(function ($item) {
            $item->child()->createMany(
                \App\Models\StandardChild::factory()->count(5)->make()->toArray()
            );
        });

    }
}