<?php

return [
    'email' => env('COMPANY_EMAIL', 'info@caracalexpeditions.co.ke'),
    'phone' => env('COMPANY_PHONE', '+254701942724'),
    'phone_label' => env('COMPANY_PHONE_LABEL', '+254 701 942 724'),
    'direct_email_url' => env(
        'COMPANY_DIRECT_EMAIL_URL',
        'https://mail.google.com/mail/?view=cm&fs=1&to='.rawurlencode(env('COMPANY_EMAIL', 'info@caracalexpeditions.co.ke')).'&su=Caracal%20Expeditions%20Enquiry'
    ),
];
