<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Business implementation',
            'Foundational (business improvement)',
            'IT infrastructure improvement',
            'Product development (IT)',
            'Product development (non-IT)',
            'Physical engineering/construction',
            'Physical infrastructure improvement',
            'Procurement',
            'Regulatory/compliance',
            'Research and Development (R&D)',
            'Service development',
            'Transformation/reengineering'
        ];
    }
}
