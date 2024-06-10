<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'admin/gallery/image/add',
		'admin/gallery/video/add',
		'admin/facility/delete',
		'admin/hotel/delete',
		'admin/slider/delete'
    ];
}
