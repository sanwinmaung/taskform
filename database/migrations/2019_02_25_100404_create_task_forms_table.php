<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_type_id');
            $table->string('company');
            $table->integer('contact_id');
            $table->string('objective');
            $table->integer('user_id');
            $table->string('due_date');
            $table->string('due_time');
            $table->string('remind_date');
            $table->string('remind_time');
            $table->integer('priority_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_forms');
    }
}
