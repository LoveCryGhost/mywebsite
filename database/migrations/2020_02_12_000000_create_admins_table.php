<?php

use App\Repositories\MigrationRepository;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public $migrationRepository;
    public function __construct()
    {
        $this->migrationRepository = new MigrationRepository();
    }
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements("id");
            $this->migrationRepository->basicColumns($table);

            $table->string('name');
            $table->string('email')->unique();
            $table->string('avatar')->nullable();
            $table->date('birthday')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('locales')->nullable();
            $table->string('tel')->nullable();
            $table->string('phone')->nullable();
            $table->rememberToken();
            $table->string('description')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
