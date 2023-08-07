<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("description");
            $table->string("home_type");
            $table->string('city');
            $table->string("address");
            $table->integer("postal_code");
            $table->string("picture")->nullable();
            $table->integer("bedrooms");
            $table->integer("bathrooms");
            $table->integer("surface");
            $table->integer("price_per_night");
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
