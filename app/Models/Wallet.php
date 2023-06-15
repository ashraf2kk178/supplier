<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'status',
        'number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
        $this->save();
    }

    public function withdraw($amount)
    {
        $this->balance -= $amount;
        $this->save();
    }
}
