<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserProfileColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'display_name')) {
                $table->string('display_name')->nullable();
            }

            if (!Schema::hasColumn('users', 'profile_picture')) {
              $table->string('profile_picture', 1000)->nullable();
            }

            if (!Schema::hasColumn('users', 'bio')) {
                $table->string('bio', 1000)->nullable();
            }

            if (!Schema::hasColumn('users', 'first_name')) {
                $table->string('first_name')->nullable();
            }

            if (!Schema::hasColumn('users', 'last_name')) {
                $table->string('last_name')->nullable();
            }

            if (!Schema::hasColumn('users', 'middle_name')) {
                $table->string('middle_name')->nullable();
            }

            if (!Schema::hasColumn('users', 'middle_name')) {
                $table->string('district')->nullable();
            }

            if (!Schema::hasColumn('users', 'middle_name')) {
                $table->string('state')->nullable();
            }

            if (!Schema::hasColumn('users', 'middle_name')) {
                $table->string('aadhar', 16)->nullable();
            }

            if (!Schema::hasColumn('users', 'gender')) {
                $table->char('gender', 1)->nullable()->comment('M-male, F-female, T-transgender, O-others');
            }

            if (!Schema::hasColumn('users', 'phone_no')) {
                $table->string('phone_no', 20)->nullable();
            }

            if (!Schema::hasColumn('users', 'type')) {
                $table->string('type')->nullable();
            }

            if (!Schema::hasColumn('users', 'status')) {
                $table->tinyInteger('status')->default(0)->comment('0-added/registered, 1-active, 2-inactive');
            }

            if (!Schema::hasColumn('users', 'meta_data')) {
                $table->json('meta_data')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('display_name', 'bio', 'first_name', 'last_name', 'middle_name', 'gender', 'phone_no', 'type', 'status', 'meta_data');
        });
    }
}
