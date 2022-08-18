<?php
namespace Database\Seeders;

use App\Models\Admin\Admin;
//use App\Models\Member\Member;
//use App\Services\GoogleSheet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
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

    public function seedFactoryData()
    {
        if(!env("SEED_FACTORY_DATA")){
            return false;
        }

        \App\Models\Admin\Admin::factory(10)->create();

        $admin = Admin::find(1);
        $admin->name = 'supder-admin';
        $admin->email = 'super_admin@app.com';
        $admin->avatar = '';
        $admin->save();

        $admin = Admin::find(2);
        $admin->name = 'admin-2';
        $admin->email = 'admin2@app.com';
        $admin->avatar = '';
        $admin->save();

    }

    public function seedGoogleData()
    {
        if(!env("SEED_GOOGLE_DATA")){
            return false;
        }
//        $this->googleSheet = new GoogleSheet();
//        $spreadSheetId = env("GOGGLE_SHEET_ERP");
//        $rows = $this->googleSheet->readGoogleSheet($spreadSheetId, $sheetName="Admins");
//        $index=1;
//        $titleDefinition=[];
//
//        $admins = [];
//        foreach ($rows as $row){
//            if($index==1){
//                foreach ($row as $key => $value){
//                    $titleDefinition[$value] = $key;
//                }
//            }
//
//            if($index!=1){
//                $admins[] = [
//                    "name" => $row [$titleDefinition["name"]],
//                    "email" => $row [$titleDefinition["email"]],
//                    "locales" => $row [$titleDefinition["locales"]],
//                    "password" => $row [$titleDefinition["password"]],
//                ];
//            }
//            $index++;
//        }
//
//        foreach ($admins as $key =>  $adminValues){
//            $admin = Admin::findOrNew($key+1);
//            $admin->name  = $adminValues["name"];
//            $admin->email  = $adminValues["email"];
//            $admin->locales  = $adminValues["locales"];
//            $admin->password  = Hash::make($adminValues["password"]);
//            $admin->save();
//        }
    }
}
