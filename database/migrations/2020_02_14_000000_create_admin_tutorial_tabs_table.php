<?php

use App\Repositories\MigrationRepository;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTutorialTabsTable extends Migration
{
    public $migrationRepository;
    public function __construct()
    {
        $this->migrationRepository = new MigrationRepository();
    }
    public function up()
    {
        Schema::create('admin_tutorial_tabs', function (Blueprint $table) {
            $table->bigIncrements("id");
            $this->migrationRepository->basicColumns($table);

            $table->string('guard')->nullable();
            $table->string('code_method')->nullable();
            $table->string('nav1')->nullable();
            $table->string('nav2')->nullable();
            $table->string('tab1')->nullable();
            $table->string('tab2')->nullable();
            $table->string('tab1_name')->nullable();
            $table->string('tab2_name')->nullable();
            $table->string('include_file_path')->nullable();
            $table->string('contents')->nullable();
            $table->string('file_path')->nullable();

            $table->date('created_at')->nullable()->useCurrent();
            $table->date('updated_at')->nullable()->useCurrent();

        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_tutorial_tabs');
    }
}
