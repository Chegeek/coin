<?php
return  [
    'active' =>  env('API.ACTIVE'),
    'cacheDuration' => env('API.CACHE.DURATION'),
    'volumes' => [
        'cacheDuration' => env('API.VOLUMES.CACHE.DURATION ') ?? 15
    ],
    'tradeHistory' => [
        'enableUpdate' => env('API.TRADE_HISTORY.ENABLE_UPDATE') ?? true,
        'forceCompleteRefresh' => env('API.TRADE_HISTORY.FORCE_REFRESH') ?? false,
        'cacheDuration' => env('API.TRADE_HISTORY.CACHE.DURATION') ?? 15,
        'cache' => env('API.TRADE_HISTORY.ENABLE_UPDATE') ?? true
    ],
    'fiat' => env('API.FIAT_CURRENCY', 'EUR'),
    'fiatSymbol' => env('API.FIAT_CURRENCY_SYMBOL', '€'),
    'watchList' => env('API.WATCHLIST', []),
    'dateCorrections' => env('DATE_CORRECTIONS'),
    'adapters' => [
        'poloniex' => [
            'key' => env('API.POLONIEX.KEY'),
            'secret' => env('API.POLONIEX.SECRET'),
            'adapterClass' => App\Adapter\Poloniex\PoloniexAdapter::class
        ],
        'bitcoinde' => [
            'key' => env('API.BITCOINDE.KEY'),
            'secret' => env('API.BITCOINDE.SECRET'),
            'adapterClass' => App\Adapter\Bitcoinde\BitcoindeAdapter::class
        ],
        'bittrex' => [
            'key' => env('API.BITTREX.KEY'),
            'secret' => env('API.BITTREX.SECRET'),
            'adapterClass' => App\Adapter\Bittrex\BittrexAdapter::class
        ],
    ],
    'alertChangeRate' => env('ALERT_CHANGE_RATE') ?? 10,
    'mail' => [
        'alert' =>[
            'subject' => env('MAIL_ALERT_SUBJECT'),
            'receiver' => [
                'adress' => env('MAIL_ALERT_RECEIVER_ADRESS')
            ],
            'sender' => [
                'name' => env('MAIL_ALERT_SENDER_NAME'),
                'adress' => env('MAIL_ALERT_SENDER_ADRESS')
            ]
        ]
    ]
];
