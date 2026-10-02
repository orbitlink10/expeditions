<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\HttpFoundation\Response;

class ApplySiteSettings
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Schema::hasTable('site_settings')) {
            foreach (DB::table('site_settings')->pluck('value', 'key') as $key => $value) {
                config(['company.'.$key => $value]);
            }
            config(['company.direct_email_url' => 'https://mail.google.com/mail/?view=cm&fs=1&to='.rawurlencode(config('company.email')).'&su=Caracal%20Expeditions%20Enquiry']);
        }

        return $next($request);
    }
}
