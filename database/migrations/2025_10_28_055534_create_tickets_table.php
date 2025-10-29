<?php

use App\Models\Category;
use App\Models\User;
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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('comment')->nullable();
            $table->enum('priority', ['high','low','medium','critical']);
            $table->enum('state',['closed','open','in-progress']);
            $table->foreignIdFor(Category::class)->constrained();
            $table->timestamps();
            $table->string('customer_name')->nullable();
            $table->string('customer_number')->nullable();
            $table->string('customer_email')->nullable();
            $table->enum('site', ['Madina', 'University','irbid']);
            $table->integer('phone');
            $table->string('customer_id');
            $table->string('anydesk_id');
            $table->json('issues');
            $table->string('attachment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
