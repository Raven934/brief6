<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'departement',
        'poste',
        'date_embauche',
        'salaire',
        'adresse',
    ];

    protected $casts = [
        'date_embauche' => 'date',
        'salaire' => 'decimal:2',
    ];

    public function getFullNameAttribute()
    {
        return $this->prenom . ' ' . $this->nom;
    }
}
