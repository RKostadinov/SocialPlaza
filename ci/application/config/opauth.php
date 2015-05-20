<?php
$config['opauth'] = array(
    'path' => '/ci/auth/login/',
    'callback_url' => 'http://localhost/auth/authenticate/',
    'callback_transport' => 'post',
    'security_salt' => 'socialplazaftw',

    'Strategy' => array(
        'Twitter' => array(
            'key' => 'XEYvFxIUHWW2KpBvzBc5qeIEy',
            'secret' => 'C9A2JmhScQHE4to5c4q0S0EMJIdDIKSbXkW2JteAkNGDvOs7Ua'
        ),
        'LinkedIn' => array(
            'api_key' => '77hsil49bezw7t',
            'secret_key' => 'wRWZp59klcKYjoCt'
        ),
        'Facebook' => array(
            'app_id' => '928591323857638',
            'app_secret' => '21f79c35adf4e5fa3e7a8c1adf0a1fa6'
        ),
    ),
);
?>