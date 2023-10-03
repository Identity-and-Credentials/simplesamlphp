<?php

/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */
$metadata['https://saml2sp.example.org'] = [
    'AssertionConsumerService' => 'https://saml2.example.org/module.php/saml/sp/saml2-acs.php/default-sp',
    'SingleLogoutService' => 'https://saml2sp.example.org/module.php/saml/sp/saml2-logout.php/default-sp',
];

/*
 * This example shows an example config that works with Google Workspace (G Suite / Google Apps) for education.
 * What is important is that you have an attribute in your IdP that maps to the local part of the email address at
 * Google Workspace. In example, if your Google account is foo.com, and you have a user that has an email john@foo.com,
 * then you must properly configure the saml:AttributeNameID authproc-filter with the name of an attribute that for
 * this user has the value of 'john'.
 */
$metadata['google.com'] = [
    'AssertionConsumerService' => 'https://www.google.com/a/g.feide.no/acs',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'authproc' => [
      1 => [
        'class' => 'saml:AttributeNameID',
        'identifyingAttribute' => 'uid',
        'Format' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
      ],
    ],
    'simplesaml.attributes' => false,
];

$metadata['cloudfoundry-saml-login'] = array(
    'AssertionConsumerService' => 'http://localhost:8080/uaa/saml/SSO/alias/cloudfoundry-saml-login',
    'SingleLogoutService' => 'http://localhost:8080/uaa/saml/SingleLogout/alias/cloudfoundry-saml-login',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
    'validate.authnrequest' => FALSE,
    'validate.logout' => FALSE,
    'authproc' => [
          1 => [
            'class' => 'saml:AttributeNameID',
            'identifyingAttribute' => 'uid',
            'Format' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
          ],
        ],
);

$metadata['testzone1.cloudfoundry-saml-login'] = array(
    'AssertionConsumerService' => 'http://testzone1.localhost:8080/uaa/saml/SSO/alias/testzone1.cloudfoundry-saml-login',
    'SingleLogoutService' => 'http://testzone1.localhost:8080/uaa/saml/SSO/alias/testzone1.cloudfoundry-saml-login',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'authproc' => [
          1 => [
            'class' => 'saml:AttributeNameID',
            'identifyingAttribute' => 'emailAddress',
            'Format' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
          ],
        ],
    'validate.authnrequest' => FALSE,
    'validate.logout' => FALSE,
);

$metadata['testzone2.cloudfoundry-saml-login'] = array(
    'AssertionConsumerService' => 'http://testzone2.localhost:8080/uaa/saml/SSO/alias/testzone2.cloudfoundry-saml-login',
    'SingleLogoutService' => 'http://testzone2.localhost:8080/uaa/saml/SingleLogout/alias/testzone2.cloudfoundry-saml-login',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'authproc' => [
          1 => [
            'class' => 'saml:AttributeNameID',
            'identifyingAttribute' => 'emailAddress',
            'Format' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
          ],
        ],
    'validate.authnrequest' => FALSE,
    'validate.logout' => FALSE,
);

$metadata['testzone3.cloudfoundry-saml-login'] = array(
    'AssertionConsumerService' => 'http://testzone3.localhost:8080/uaa/saml/SSO/alias/invalid',
    'SingleLogoutService' => 'http://testzone3.localhost:8080/uaa/saml/SSO/alias/invalid',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'authproc' => [
          1 => [
            'class' => 'saml:AttributeNameID',
            'identifyingAttribute' => 'emailAddress',
            'Format' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
          ],
        ],
    'validate.authnrequest' => FALSE,
    'validate.logout' => FALSE,
);

$metadata['testzone4.cloudfoundry-saml-login'] = array(
    'AssertionConsumerService' => 'http://testzone4.localhost:8080/uaa/saml/SSO/alias/testzone4.cloudfoundry-saml-login',
    'SingleLogoutService' => 'http://testzone4.localhost:8080/uaa/saml/SSO/alias/testzone4.cloudfoundry-saml-login',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
    'authproc' => [
          1 => [
            'class' => 'saml:AttributeNameID',
            'identifyingAttribute' => 'uid',
            'Format' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
          ],
        ],
    'validate.authnrequest' => FALSE,
    'validate.logout' => FALSE,
);
