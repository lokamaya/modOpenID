<?php

$_lang['modopenid.menu'] = 'modOpenID';
$_lang['modopenid.menu_desc'] = 'OpenID for MODX';
$_lang['modopenid.manage.page_title'] = 'modOpenID';

//System Area
$_lang['area_openid_provider'] = 'OpenID Provider';
$_lang['area_openid_provider_setting'] = 'OpenID Provider Settings';
$_lang['area_openid_resources'] = 'OpenID Resources';

//System Setting
$_lang['setting_modopenid.client_id'] = 'Client ID';
$_lang['setting_modopenid.client_id_desc'] = 'Client ID provided by Identity Provider';
$_lang['setting_modopenid.client_secret'] = 'Client Secret';
$_lang['setting_modopenid.client_secret_desc'] = 'Client Secret provided by Identity Provider';
$_lang['setting_modopenid.debug'] = 'Debug OpenID';
$_lang['setting_modopenid.debug_desc'] = 'Enable/disable debuging (default:false)';
$_lang['setting_modopenid.provider_name'] = 'Provider Name';
$_lang['setting_modopenid.provider_name_desc'] = 'Name of issuer or Identity Provider, mostly not needed (default: empty)';
$_lang['setting_modopenid.provider_url'] = 'Provider URL';
$_lang['setting_modopenid.provider_url_desc'] = 'URL for OpenID connection provided by Identity Provider';
$_lang['setting_modopenid.provider_xproxy'] = 'Provider HTTP Proxy';
$_lang['setting_modopenid.provider_xproxy_desc'] = 'This will replace Provider URL (default: empty)';
$_lang['setting_modopenid.session_iframe'] = 'Check Session iFrame';
$_lang['setting_modopenid.session_iframe_desc'] = 'Relatif path to <i>check_session_iframe</i> setting; empty path will disable it (default: /protocol/openid-connect/login-status-iframe.html)';
$_lang['setting_modopenid.verify_host'] = 'Verify Host';
$_lang['setting_modopenid.verify_host_desc'] = 'Enable verify host (default:true), only disable on development stage';
$_lang['setting_modopenid.verify_peer'] = 'Verify Peer';
$_lang['setting_modopenid.verify_peer_desc'] = 'Enable verify peer (default:true), only disable on development stage';
$_lang['setting_modopenid.certpath'] = 'Path to Certificate';
$_lang['setting_modopenid.certpath_desc'] = 'Path to my certificate stored on local server';
$_lang['setting_modopenid.page_login'] = 'Login Page';
$_lang['setting_modopenid.page_login_desc'] = 'Resource ID for login page';
$_lang['setting_modopenid.page_login_redirect'] = 'Login Page Redirect';
$_lang['setting_modopenid.page_login_redirect_desc'] = 'Resource ID after successful login';
$_lang['setting_modopenid.page_login_redirect_last'] = 'Login Redirect to Last Page';
$_lang['setting_modopenid.page_login_redirect_last_desc'] = 'Redirect to the last page accessed by user?';
$_lang['setting_modopenid.page_logout'] = 'Signout Page';
$_lang['setting_modopenid.page_logout_desc'] = 'Resource ID for logout page';
$_lang['setting_modopenid.page_logout_redirect'] = 'Signout Page Redirect';
$_lang['setting_modopenid.page_logout_redirect_desc'] = 'Resource ID after successful logout (default:1)';
$_lang['setting_modopenid.page_session_iframe'] = 'iFrame Page';
$_lang['setting_modopenid.page_session_iframe_desc'] = 'Resource ID for iframe page, a blank page is fine';
$_lang['setting_modopenid.page_sso'] = 'SSO Session';
$_lang['setting_modopenid.page_sso_desc'] = 'Resource ID for SSO folder, for storing OpenID session';
$_lang['setting_modopenid.scopes'] = 'Scopes of User';
$_lang['setting_modopenid.scopes_desc'] = 'Scopes used to get detail of current user (see: https://auth0.com/docs/get-started/apis/scopes/openid-connect-scopes)';
