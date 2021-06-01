<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {

            $table -> foreign('location_id', 'employee-location')
                   -> references('id')
                   -> on('locations');
        });
        Schema::table('employee_task', function (Blueprint $table) {

            $table -> foreign('employee_id', 'employee-task')
                   -> references('id')
                   -> on('employees');
            $table -> foreign('task_id', 'task-employee')
                   -> references('id')
                   -> on('tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {

            $table -> dropForeign('employee-location');
        });
        Schema::table('employee_task', function (Blueprint $table) {

            $table -> dropForeign('employee-task');
            $table -> dropForeign('task-employee');
        });
    }
}
