<?php

use App\Models\Group;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('group_users', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Group::class)->constrained();
            $table->foreignId('invited_by')->nullable()->constrained('users');
            $table->string('status');
            $table->string('role');
            $table->string('token', 1024)->nullable();
            $table->dateTime('token_expires_at')->nullable();
            $table->dateTime('token_used_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('group_users');
    }
};
