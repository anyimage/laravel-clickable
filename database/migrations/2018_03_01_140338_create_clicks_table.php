<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClicksTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'clicks', function ( Blueprint $table ) {
            $table->engine = 'MyISAM';
            $table->bigIncrements( 'id' );
            $table->unsignedBigInteger( 'clickable_id' )->index();
            $table->string( 'clickable_type', 32 );
            $table->string( 'ip', 20 );
            $table->string( 'country', 60 )->nullable();
            $table->string( 'city', 120 )->nullable();
            $table->string( 'source', 55 )->default( 'web' );
            $table->string( 'referer', 255 )->nullable();
            $table->string( 'user_agent', 255 )->nullable();
            $table->softDeletes();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'clicks' );
    }
}
