<?php
return [
    'client_id' => env('PAYPAL_CLIENT_ID','AQsyHi3IFKuQ8DIjFCYg9NMOlUIN5CL58NLU1VfXjzLvt7N_xIa9zVWZtuvRdoWdf6iW6QNNQzdJ8hpq'),
    'secret' => env('PAYPAL_SECRET','EEVL1JNOjwwGRU8XmDd1rkgzVMltuNh9XSmRZGziWRSvro996wkDtuw87ZIiJIeQOPF59ZCZnqn4tVyp'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];
