<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterSocialMedia extends Model
{
    protected $table = 'footer_social_media';

    protected $fillable = [
        'footer_id',
        'platform',
        'url',
        'icon',
    ];

    public function footer()
    {
        return $this->belongsTo(Footer::class);
    }
}
