<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPlantoesChangeDateToDatetime extends Migration
{
    public function up()
    {
        Schema::table('plantoes', function (Blueprint $table) {
            $table->dateTime('data_inicio')->change();
            $table->dateTime('data_fim')->change();
        });
    }

    public function down()
    {
        Schema::table('plantoes', function (Blueprint $table) {
            $table->date('data_inicio')->change();
            $table->date('data_fim')->change();
        });
    }
}

