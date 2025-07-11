<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    // Campos que podem ser preenchidos em massa (mass assignable)
    protected $fillable = [
        'name',
        'email',
        'password',
        'perfil', // adicionamos o campo 'perfil' para diferenciar master e funcionária
    ];

    // Campos que não devem ser expostos em arrays/JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Casts para tipos específicos automaticamente
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed', // garante que a senha seja armazenada hash automaticamente
    ];

    // Método para verificar se o usuário é do perfil master
    public function isMaster(): bool
    {
        return $this->perfil === 'master';
    }

    // Método para verificar se o usuário é do perfil funcionário
    public function isFuncionario(): bool
    {
        return $this->perfil === 'funcionario';
    }
}
