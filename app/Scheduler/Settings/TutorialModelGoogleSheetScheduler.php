<?php

namespace App\Scheduler\Settings;


use App\Models\Admin\AdminTutorialTab;
use Google\Client;

class TutorialModelGoogleSheetScheduler
{
    public $sheets;
    public function __construct()
    {
        $client = new Client();
        $client->setAuthConfig(storage_path('credentials.json'));
        $client->addScope("https://www.googleapis.com/auth/spreadsheets");
        $client->setScopes([\Google\Service\Sheets::DRIVE, \Google\Service\Sheets::SPREADSHEETS]);

        // setup Google Client
        $service = new \Google\Service\Sheets($client);
        $this->sheets = new  \Revolution\Google\Sheets\Sheets();
        $this->sheets->setService($service);

    }

    public function exportToGoogleSheet(){
        //SheetId
        $this->sheets->spreadsheet("16eNSXQ3UymirMq0MLEwbXLZZQM9YhJ-uaLdTAFf3FFI");

        //Users Models
        $title = collect(AdminTutorialTab::first())->keys();

        $adminTutorialTabs = AdminTutorialTab::get();

        //新增或刪除
        $sheetLists = $this->sheets->sheetList();
        if(!in_array("AdminTutorialTabs",$sheetLists)){
            $this->sheets->addSheet('AdminTutorialTabs');
        }else{
            $this->sheets->deleteSheet('AdminTutorialTabs');
            $this->sheets->addSheet('AdminTutorialTabs');
        }


        //Clear
        $this->sheets->sheet('AdminTutorialTabs')->range("A1:Z10000")->clear();


        //寫入標題
        $title = $title->toArray();
        $this->sheets->append([$title]);

        //寫入資料
        $adminTutorialTabs = $adminTutorialTabs->toArray();
        $data=[];
        foreach ($adminTutorialTabs as $adminTutorialTab){

            $data[]=$adminTutorialTab;
        }

        //$this->sheets->append([$user]);
        $this->sheets->sheet('AdminTutorialTabs')->append($data);
    }

    public function importFromGoogleSheet(){

        //SheetId
        $this->sheets->spreadsheet("16eNSXQ3UymirMq0MLEwbXLZZQM9YhJ-uaLdTAFf3FFI");
        //顯示方法_1
        $rows_get = $this->sheets->sheet('AdminTutorialTabs')->get();
        $header = $rows_get->pull(0);
        $values_showArray =  $this->sheets->collection($header, $rows_get);
        $values_showArray->toArray();

        $arrs = $values_showArray->toArray();
        //dd($arrs);

        foreach ($arrs as $key0 => $item){
            $arrs[$key0]["is_checked"] = 1;
            unset($arrs[$key0]["no"]);
            unset($arrs[$key0]["created_at"]);
            unset($arrs[$key0]["updated_at"]);
        }

        AdminTutorialTab::query()->truncate();
        AdminTutorialTab::insert($arrs);

    }

}
