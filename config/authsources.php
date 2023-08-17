<?php

$config = [
    /*
     * When multiple authentication sources are defined, you can specify one to use by default
     * in order to authenticate users. In order to do that, you just need to name it "default"
     * here. That authentication source will be used by default then when a user reaches the
     * SimpleSAMLphp installation from the web browser, without passing through the API.
     *
     * If you already have named your auth source with a different name, you don't need to change
     * it in order to use it as a default. Just create an alias by the end of this file:
     *
     * $config['default'] = &$config['your_auth_source'];
     */

    // This is a authentication source which handles admin authentication.
    'admin' => [
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.

        'core:AdminPassword',
    ],


    // An authentication source which can authenticate against SAML 2.0 IdPs.
    'default-sp' => [
        'saml:SP',

        // The entity ID of this SP.
        'entityID' => null,

        // The entity ID of the IdP this SP should contact.
        // Can be NULL/unset, in which case the user will be shown a list of available IdPs.
        'idp' => null,

        // The URL to the discovery service.
        // Can be NULL/unset, in which case a builtin discovery service will be used.
        'discoURL' => null,

        /*
         * If SP behind the SimpleSAMLphp in IdP/SP proxy mode requests
         * AuthnContextClassRef, decide whether the AuthnContextClassRef will be
         * processed by the IdP/SP proxy or if it will be passed to the original
         * IdP in front of the IdP/SP proxy.
         */
        'proxymode.passAuthnContextClassRef' => false,
    ],

    'example-userpass' => [
        'exampleauth:UserPass',

        // Give the user an option to save their username for future login attempts
        // And when enabled, what should the default be, to save the username or not
        'remember.username.enabled' => TRUE,
        'remember.username.checked' => TRUE,

        'marissa:koala' => [
            'uid' => 'marissa@test.org',
            'eduPersonAffiliation' => ['member', 'marissa'],
            'emailAddress' => 'marissa@test.org'
        ],

        'marissa2:saml2' => [
            'uid' => 'marissa2@test.org',
            'eduPersonAffiliation' => ['member', 'marissa2'],
            'emailAddress' => 'marissa2@test.org'
        ],

        'marissa3:saml2' => [
            'uid' => 'marissa3@test.org',
            'eduPersonAffiliation' => ['member', 'marissa3'],
            'emailAddress' => 'marissa3@test.org'
        ],

        'marissa4:saml2' => [
            'uid' => 'marissa4',
            'eduPersonAffiliation' => ['member', 'marissa4'],
            'emailAddress' => 'marissa4@test.org',
            'groups' => ['saml.user', 'saml.admin'],
        ],

        'marissa5:saml5' => [
            'uid' => 'marissa5',
            'eduPersonAffiliation' => ['member', 'marissa5'],
            'emailAddress' => 'marissa5@test.org',
            'groups' => ['saml.user', 'saml.admin'],
            'costCenter' => 'Denver,CO',
            'manager' => ['John the Sloth', 'Kari the Ant Eater'],
        ],

        'marissa6:saml6' => [
            'uid' => 'marissa6',
            'eduPersonAffiliation' => ['member'],
            'emailAddress' => 'marissa6@test.org',
            'groups' => ['saml.user', 'saml.admin'],
            'costCenter' => 'Denver,CO',
            'manager' => ['John the Sloth', 'Kari the Ant Eater'],
        ],

        'user_only_for_invitations_test:saml' => [
            'uid' => 'user_only_for_invitations_test',
            'eduPersonAffiliation' => ['member', 'user_only_for_invitations_test'],
            'emailAddress' => 'testinvite@test.org',
            'groups' => ['saml.user', 'saml.admin'],
            'costCenter' => 'Denver,CO',
            'manager' => ['John the Sloth', 'Kari the Ant Eater'],
        ],

        'user:password' => [
            'uid' => 'testuser@spring.security.saml',
            'eduPersonAffiliation' => ['member', 'user'],
            'emailAddress' => 'testuser@spring.security.saml'
        ],
    ],
];
