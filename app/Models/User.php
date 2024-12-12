<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'npm',
        'kelas_id',
        'lab_id',
        'foto',
        'jurusan',
        'semester',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
 upload-file
     * Relationship with Kelas model
     * Assumes the foreign key is 'kelas_id' in the 'users' table.

     * Relasi ke Kelas.
 master
     */
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
 upload-file


    /**
     * Relasi ke Lab.
     */
    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }
 master
}
