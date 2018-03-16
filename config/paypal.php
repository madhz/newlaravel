<?php
return [
    // set your paypal credential
    'client_id' => env('PAYPAL_CLIENT_ID','AVX82e6y1NbVcQ68-k6kqb4dRW0AlXrRoMaGl_kXdKxkVcU_0PP0p4pQWZjFxB_7ri76PzccU3yq3Aw5'),
    'secret' => env('PAYPAL_SECRET','EGSOdqCdA8s-K4QCbEsRI2zABnHd2YkMaRHsuI7LRDX7Wol64v5UD8rIEtR3ade7u0rf8IrjMCtyJWlP'),

    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => env('PAYPAL_MODE','sandbox'),

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'ERROR'
    ),
];