<?php

// return [
//   "driver" => "smtp",
//   "host" => "smtp.mailtrap.io",
//   "port" => 2525,
//   "from" => array(
//       "address" => "islam.sobhi61@gmail.com",
//       "name" => "Islam Sobhi"
//   ),
//   "username" => "806ed94eba03b6",
//   "password" => "099f243be14e19",
//   "sendmail" => "/usr/sbin/sendmail -bs"
// ];
//MAIL_DRIVER=smtp
// MAIL_HOST=smtp.mailtrap.io
// MAIL_PORT=2525
// MAIL_USERNAME=806ed94eba03b6
// MAIL_PASSWORD=099f243be14e19
// MAIL_ENCRYPTION=tls
//
//
// MAIL_DRIVER=mailgun
// MAILGUN_DOMAIN=mg.YOUR_DOMAIN.com
// MAILGUN_SECRET=YOUR_KEY_HERE
//
// MAIL_DRIVER=smtp
// MAIL_HOST=smtp.sendgrid.net
// MAIL_PORT=587
// MAIL_USERNAME=islam.sobhi61
// MAIL_PASSWORD=123456islamAa
// MAIL_ENCRYPTION=tls
// MAIL_FROM_NAME="islam sobhi"
// MAIL_FROM_ADDRESS='islam.sobhi61@gmail.com'
//
//

return [


    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
    'port' => env('MAIL_PORT', 587),
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'islam.sobhi61@gmail.com'),
        'name' => env('MAIL_FROM_NAME', 'islam sobhi'),
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
