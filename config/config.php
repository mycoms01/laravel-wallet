<?php

return [

    /**
     * Which model is your User's
     */
    'user_model' => 'App\User',
    /**
     * Which hash is your prefix
     */
    'hash_prefix'=>'wl-',

    /**
     * Change this if you extend the default Wallet Model
     */
    'wallet_model' => 'Depsimon\Wallet\Wallet',

    /**
     * Change this if you extend the default Transaction Model
     */
    'transaction_model' => 'Depsimon\Wallet\Transaction',

];