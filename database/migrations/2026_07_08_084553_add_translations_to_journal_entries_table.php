<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('journal_entries', function (Blueprint $table) {
            $table->string('title_en')->nullable()->after('title');
            $table->string('title_de')->nullable()->after('title_en');

            $table->text('excerpt_en')->nullable()->after('excerpt');
            $table->text('excerpt_de')->nullable()->after('excerpt_en');

            $table->longText('content_en')->nullable()->after('content');
            $table->longText('content_de')->nullable()->after('content_en');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('journal_entries', function (Blueprint $table) {
            $table->dropColumn([
                'title_en',
                'title_de',
                'excerpt_en',
                'excerpt_de',
                'content_en',
                'content_de',
            ]);
        });
    }
};
