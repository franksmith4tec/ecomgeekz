<?php
return [
    'stripe' => [
        'public_key' => 'pk_test_51QokbMJJIyLN8zhqKEVi90jOXpnzKPGA6WmyifCEeljPgyJR3X6AaljHtbPOgDMBs8Bq0Iv2xHxhOvuveiwcimaZ00i1iJT8gk',
        'secret_key' => 'sk_test_51QokbMJJIyLN8zhqxMRr4OTDoeVYZ5i34Eh63SVD1EFfcxMk9fOjygl4SVqvDhozpQr9z3nCBgAs9CG4Ep9bdxAe00jz19m3Ip',
        'environment' => 'test', // 'test' or 'live'
    ],
    'square' => [
        'application_id' => 'sq0idp-9sGXkwALQzoGzuyfO-m4qw',
        'access_token' => 'EAAAl1e-ctg_xoi8mkMvtvA7qEa8rhhgr1c2aqpAwE97fS-6z50hIl3mealWxrZp',
        'location_id' => 'L65GPJWPBRQAF',
        'environment' => 'production', // 'sandbox' or 'production'
    ],
    'easypay' => [
        'api_key' => 'uNx5zv2dAaz3hq8kUzdxE7vj3V2WN4NP',
        'end_point' => 'https://secure.easypaydirectgateway.com/api/transact.php',
    ],
];
