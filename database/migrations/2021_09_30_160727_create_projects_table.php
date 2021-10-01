<?php

use App\Models\Project;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cliente');
            $table->string('cliente_final');
            $table->string('description');
            $table->boolean('status', [Project::BORRADOR, Project::PUBLICADO])->default(true);
            $table->string('slug');
            $table->date('inicio');
            $table->date('fin');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('project_types_id')->nullable();
            $table->unsignedBigInteger('project_categories_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('project_types_id')->references('id')->on('project_types')->onDelete('set null');
            $table->foreign('project_categories_id')->references('id')->on('project_categories')->onDelete('set null');
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
        Schema::dropIfExists('projects');
    }
}
