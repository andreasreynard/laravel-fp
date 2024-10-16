<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $with = ['user', 'task_type'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function task_type(): BelongsTo
    {
        return $this->belongsTo(Task_type::class);
    }
}
