<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $table= "candidate";
    protected $fillable = [
        'candidatename',
        'position',
        'email',
        'partylist'
    ];
}
