<?php

use App\Models\Company;
use App\Models\Country;
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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignIdFor(Company::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('location');
            $table->string('country_code', 2)
                ->default('CA');
            $table->string('currency_code', 3)
                ->default('CAD');
            $table->unsignedInteger('salary')
                ->comment('Salary in Low Denomination (Cent or Paisa');
            $table->timestamps();

            $table->foreign('country_code')
                ->references('iso_code')
                ->on(new Country()->getTable())
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
