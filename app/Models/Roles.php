<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'roles_id';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['roles_name',
    'roles_permission',
    'updated_at',
    'created_at', ];
}
