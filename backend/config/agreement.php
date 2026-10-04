<?php

return [
    'view' => 'agreements.standard',
    'view_path' => resource_path('views/agreements/standard.blade.php'),
    'output_dir' => 'agreements',
    'representative' => env('AGREEMENT_REPRESENTATIVE', ''),
    'guarantor' => env('AGREEMENT_GUARANTOR', ''),
    'email' => env('AGREEMENT_EMAIL', ''),
    'phone' => env('AGREEMENT_PHONE', ''),
];
