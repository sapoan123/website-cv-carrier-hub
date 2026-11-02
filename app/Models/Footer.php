<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'logo',
        'description',
        'copyright',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function socialMedia()
    {
        return $this->hasMany(FooterSocialMedia::class);
    }

    public function quickLinks()
    {
        return $this->hasMany(FooterQuickLink::class);
    }
}
