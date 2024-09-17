<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveUniqueFromEmailTemplteAct extends Migration
{
    public function up()
    {
        try {

            Schema::table('email_templates', function (Blueprint $table) {
                $table->dropUnique('email_templates_act_unique');
                $table->string('act', 191)->change();
            });
        } catch (\Exception $e) {
            Log::alert($e->getMessage());
        }
    }


    public function down()
    {
        //
    }
}
