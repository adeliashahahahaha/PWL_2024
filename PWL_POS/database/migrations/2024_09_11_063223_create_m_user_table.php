<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvatarToMUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_user', function (Blueprint $table) {
            // Menambahkan kolom 'avatar' bertipe string dan nullable
            $table->string('avatar')->nullable()->after('username'); // Adjust sesuai dengan urutan yang diinginkan
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_user', function (Blueprint $table) {
            // Menghapus kolom 'avatar' jika rollback
            $table->dropColumn('avatar');
        });
    }
}
