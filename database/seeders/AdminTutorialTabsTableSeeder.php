<?php
namespace Database\Seeders;

use App\Models\Member\Member;
use App\Services\GoogleSheet;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminTutorialTabsTableSeeder extends Seeder
{
    public function run()
    {
        $this->seedFactoryData();
        $this->seedDefaultData();
        $this->seedGoogleData();
    }

    public function seedDefaultData(){
        if(!env("SEED_DEFAULT_DATA")){
            return false;
        }
    }

    public function seedFactoryData(){
        if(!env("SEED_FACTORY_DATA")){
            return false;
        }
        \App\Models\Admin\AdminTutorialTab::factory(10)->create();
    }

    public function seedGoogleData(){
        if(!env("SEED_GOOGLE_DATA")){
            return false;
        }
    }

}
