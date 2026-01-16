<?php
include("../include/variables.php");
$base_pay_url = $base_url .'/pay';

return [
    'stripe' => [
        'public_key' => 'pk_test_51QokbMJJIyLN8zhqKEVi90jOXpnzKPGA6WmyifCEeljPgyJR3X6AaljHtbPOgDMBs8Bq0Iv2xHxhOvuveiwcimaZ00i1iJT8gk',
        'secret_key' => 'sk_test_51QokbMJJIyLN8zhqxMRr4OTDoeVYZ5i34Eh63SVD1EFfcxMk9fOjygl4SVqvDhozpQr9z3nCBgAs9CG4Ep9bdxAe00jz19m3Ip',
        'environment' => 'test', // 'test' or 'live'
    ],
    'square' => [
        'application_id' => 'sandbox-sq0idb-HbWStfiib105xBBKIHx2EA',
        'access_token' => 'EAAAlyxr9qwukHcrhFFRSNMxLYAR7yhuJDa4uDLfJ0cebCbpE_iDpRKNfMaaVuEp',
        'location_id' => 'LXD65CEDGK4GK',
        'environment' => 'sandbox', // 'sandbox' or 'production'
    ],
    'easypay' => [
        'api_key' => 'uNx5zv2dAaz3hq8kUzdxE7vj3V2WN4NP',
        'end_point' => 'https://secure.easypaydirectgateway.com/api/transact.php',
    ],
    
    // 'authorize' => [
    //     'login_id' => '67NLpnC5nx',
    //     'transaction_key' => '752uf5Y3WGxza2BW',
    //     'environment' => 'sandbox', // Change to 'production' for live
    // ],
    
    
     'authorize' => [
        'login_id' => '84zvk47U74XR',
        'transaction_key' => '2WrF2wuZ6R23q2cZ',
        'environment' => 'production', // Change to 'production' for live
    ],
    
    
    'base_url' => $base_url,
];