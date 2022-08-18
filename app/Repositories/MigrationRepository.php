<?php

namespace App\Repositories;

use App\Repositories\CoreRepository;
use Illuminate\Database\Schema\Blueprint;

class MigrationRepository extends CoreRepository
{
    public function basicColumns(Blueprint $table){
        $table->tinyInteger('is_checked')->nullable()->default(0);
        $table->tinyInteger('is_confirmed')->nullable()->default(0);
        $table->date('released_at')->nullable()->useCurrent();
        $table->tinyInteger('sort_order')->nullable()->default(0);
        $table->string('barcode')->nullable();
    }

    public function checkedConfirmed(Blueprint $table){
        $table->tinyInteger('is_checked')->nullable()->default(0);
        $table->tinyInteger('is_confirmed')->nullable()->default(0);
    }
    public function checkedConfirmReleased(Blueprint $table){
        $table->tinyInteger('is_checked')->nullable()->default(0);
        $table->tinyInteger('is_confirmed')->nullable()->default(0);
        $table->tinyInteger('is_released')->nullable()->default(0);
        $table->date('released_at')->nullable();
    }

    public function basicColumnsDrop(Blueprint $table){
        $table->dropColumn('is_checked');
        $table->dropColumn('is_confirmed');
        $table->dropColumn('released_at');
        $table->dropColumn('sort_order');
        $table->dropColumn('barcode');
    }
}
