<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterQuickLink extends Model
{
    protected $table = 'footer_quick_links';

    protected $fillable = [
        'footer_id',
        'title',
        'url',
    ];

    public function footer()
    {
        return $this->belongsTo(Footer::class);
    }
}
