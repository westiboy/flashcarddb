<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlashcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flashcards', function (Blueprint $table) {

        # Increments method will make a Primary, Auto-Incrementing field.
        # Most tables start off this way
        $table->increments('id');

        # This generates two columns: `created_at` and `updated_at` to
        # keep track of changes to a row
        $table->timestamps();

        # The rest of the fields...
        $table->integer('users_id');
        $table->integer('classes_id');
        $table->string('card_entry');
        $table->string('definition_entry');
        $table->string('relation__entry');
        $table->string('card_entry_url');

        # FYI: We're skipping the 'tags' field for now; more on that later.

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('flashcards');
    }
}
