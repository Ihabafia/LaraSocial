<?php

namespace Database\Factories;

use App\Models\PostAttachment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostAttachmentFactory extends Factory
{
    protected $model = PostAttachment::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
