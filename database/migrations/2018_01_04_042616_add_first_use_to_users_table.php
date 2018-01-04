<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
use Carbon\Carbon;

class AddFirstUseToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $now = Carbon::now();
        $user = array(
            'name' => 'vini123',
            'email' => 'lichking_lin86@qq.com',
            'password' => bcrypt('111111'),
            'created_at' => $now,
            'updated_at' => $now,
        );
        User::insert($user);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        User::truncate();
    }
}
