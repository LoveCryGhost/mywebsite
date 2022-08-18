<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Admin;
use App\Models\Admin\AdminTutorialTab;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminTutorialTabFactory extends Factory
{
    protected $model = AdminTutorialTab::class;

    public function definition()
    {
        return [
            'is_checked' => 1,
            'is_confirmed' =>$this->faker->numberBetween(1,1),
            'released_at' => $this->faker->date(),
            "barcode" => $this->faker->numberBetween(1000,999999),
            "sort_order" => 0,

            'guard' => $this->faker->name,
            'code_method' => $this->faker->name,
            'nav1' => $this->faker->name,
            'nav2' => $this->faker->name,
            'tab1' => $this->faker->name,
            'tab2' => $this->faker->name,
            'tab1_name' => $this->faker->name,
            'tab2_name' => $this->faker->name,
            'include_file_path' => $this->faker->name,
            'contents' => $this->faker->name,
            'file_path' => $this->faker->name
        ];
    }
}
