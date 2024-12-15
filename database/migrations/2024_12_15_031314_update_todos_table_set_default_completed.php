<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTodosTableSetDefaultCompleted extends Migration
{
    public function up()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->boolean('completed')->default(false)->change();
        });
    }

    public function down()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->boolean('completed')->nullable()->change();
        });
    }
}
