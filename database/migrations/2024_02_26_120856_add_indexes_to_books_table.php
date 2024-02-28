<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->unique(['slug','isbn']);
            $table->index(['title','category_id','price','publication_date']);
            $table->fullText('description');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
             $table->dropUnique(['books_slug','books_isbn']);
             $table->dropIndex(['books_title','books_category_id','books_price','books_publication_date']);
             $table->dropFullText(['books_description']);
        });
    }
};
