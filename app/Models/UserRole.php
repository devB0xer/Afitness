<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{

    protected $table = 'roles';

    protected $primaryKey = 'role_id';
    protected $fillable = [
        'role'
    ];

    // Первичный ключ 'id' автоматически добавляется и инкрементируется
}
