<?php
namespace Database\Seeders;

use App\Models\Member\Member;
use App\Services\GoogleSheet;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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

        \App\Models\User::factory(100)->create();

        $user = User::find(1);
        $user->name = 'User';
        $user->email = 'user@app.com';
        $user->password = bcrypt('1234567890');
//        $user->activated = true;
//        $user->activation_token = null;
//        $user->is_admin = true;
        $user->save();
    }

    public function seedGoogleData(){
        if(!env("SEED_GOOGLE_DATA")){
            return false;
        }

//        $this->googleSheet = new GoogleSheet();
//        $spreadSheetId = env("GOGGLE_SHEET_ERP");
//        $rows = $this->googleSheet->readGoogleSheet($spreadSheetId, $sheetName="Users");
//        $index=1;
//        $titleDefinition=[];
//        $users = [];
//        foreach ($rows as $row){
//            if($index==1){
//                foreach ($row as $key => $value){
//                    $titleDefinition[$value] = $key;
//                }
//            }
//
//            if($index!=1){
//                $users[] = [
//                    "name" => $row [$titleDefinition["name"]],
//                    "email" => $row [$titleDefinition["email"]],
//                    "locales" => $row [$titleDefinition["locales"]],
//                    "password" => $row [$titleDefinition["password"]],
//                ];
//            }
//            $index++;
//        }
//
//        foreach ($users as $key =>  $userValues){
//            $user = User::findOrNew($key+1);
//            $user->name  = $userValues["name"];
//            $user->email  = $userValues["email"];
//            $user->locales  = $userValues["locales"];
//            $user->password  = Hash::make($userValues["password"]);
//            $user->save();
//        }

    }

}
