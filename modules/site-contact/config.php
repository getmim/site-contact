<?php

return [
    '__name' => 'site-contact',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/site-contact.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'app/site-contact' => ['install','remove'],
        'modules/site-contact' => ['install','update','remove'],
        'theme/site/contact' => ['install','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'contact' => NULL
            ],
            [
                'site' => NULL
            ],
            [
                'site-meta' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'lib-form' => NULL
            ],
            [
                'site-setting' => NULL
            ]
        ],
        'optional' => [
            [
                'lib-recaptcha' => NULL
            ]
        ]
    ],
    'autoload' => [
        'classes' => [
            'SiteContact\\Controller' => [
                'type' => 'file',
                'base' => 'app/site-contact/controller'
            ],
            'SiteContact\\Meta' => [
                'type' => 'file',
                'base' => 'modules/site-contact/meta'
            ]
        ],
        'files' => []
    ],
    'routes' => [
        'site' => [
            'siteContact' => [
                'path' => [
                    'value' => '/contact'
                ],
                'method' => 'GET|POST',
                'handler' => 'SiteContact\\Controller\\Contact::contact'
            ]
        ]
    ],
    'libForm' => [
        'forms' => [
            'site-contact' => [
                'fullname' => [
                    'label' => 'Fullname',
                    'type' => 'text',
                    'rules' => [
                        'required' => true
                    ]
                ],
                'email' => [
                    'label' => 'Email',
                    'type' => 'email',
                    'rules' => [
                        'required' => true,
                        'email' => true
                    ],
                    'filters' => [
                        'lowercase' => true
                    ]
                ],
                'subject' => [
                    'label' => 'Subject',
                    'type' => 'text',
                    'rules' => [
                        'required' => true
                    ]
                ],
                'content' => [
                    'label' => 'Content',
                    'type' => 'textarea',
                    'rules' => [
                        'required' => true
                    ]
                ]
            ]
        ]
    ]
];