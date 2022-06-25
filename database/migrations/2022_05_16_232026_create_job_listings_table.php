<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Recruiter;

class CreateJobListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            // $table->string('designation');
            $table->string('level');
            $table->string('type');
            $table->string('status');
            $table->text('qualification')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->string('categories')->nullable();
            $table->string('tags')->nullable();
            $table->timestamps();
            $table->foreignIdFor(Recruiter::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_listings');
    }
}
