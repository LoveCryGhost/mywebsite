<?php

namespace App\Http\Controllers\Admin;


use App\Scheduler\Settings\TutorialModelGoogleSheetScheduler;
use Illuminate\Support\Facades\Artisan;

class AdminSettingsController extends AdminCoreController
{

    public function initialize_all_db_to_google_to_db(){
        //  backup to google
        (new TutorialModelGoogleSheetScheduler())->exportToGoogleSheet();

        //  refresh and seed
            $this->refresh_and_seed();

        //  backup_from_google
        (new TutorialModelGoogleSheetScheduler())->importFromGoogleSheet();

        return redirect()->route('admin.dashboard.index')->with('notification', ["type" => "success", "text"=>' DB to Google Done !!']);
    }

    public function initialize_all_google_to_db(){
//        //  backup to google
//        (new TutorialModelGoogleSheetScheduler())->exportToGoogleSheet();

        //  refresh and seed
        $this->refresh_and_seed();

        //  backup_from_google
        (new TutorialModelGoogleSheetScheduler())->importFromGoogleSheet();

        return redirect()->route('admin.dashboard.index')->with('notification', ["type" => "success", "text"=>' Google to DB Done !!']);
    }


    //儲存到google
    public function backup_to_google(){

    }

    public function refresh_and_seed(){
        Artisan::call(' migrate:refresh --seed', [
        ]);
    }

    //從google 讀取
    public function backup_from_google(){

    }
}
