<?php
/*==========> INFO 
 * CODE     : BY TSO SHIV
 * SCRIPT   : CC CHECKER
 * VERSION  : V4
 * TELEGRAM : t.me/imnotshiv
 * BY       : TEAM_TSO
 */
$settings = array(
    "mode_proxy" => "off", // on or off
    "proxy_list" => "proxy.txt", // proxy list (ex: proxy.txt) (FORMAT: proxy:port)
    "proxy_Auth" => "", // proxy password (ex: username:pass)
    "type_proxy" => "http", // http , https or socks
    "apikey"     => "apikey.txt", // apikey list (ex: apikey.txt) [DONT CHANGE THIS]
    "thisAPI"    => "API.txt", // This API (ex: API.txt) [DONT CHANGE THIS]
);

$mode_proxy = $settings["mode_proxy"];
$proxy_list = $settings["proxy_list"];
$proxy_pwd  = $settings["proxy_Auth"];
$proxy_type = $settings["type_proxy"];
$thisApikey = $settings["apikey"];
$thisApi    = $settings["thisAPI"];

// GET SETTINGS
if (strtolower($mode_proxy) == "off") {
    $Proxies    = "";
    $proxy_Auth = $proxy_pwd;
    $type_proxy = $proxy_type;
    $apikey     = GetApikey($thisApikey);
    $APIs       = GetApiS($thisApi);
} else {
    $Proxies    = GetProxy($proxy_list);
    $proxy_Auth = $proxy_pwd;
    $type_proxy = $proxy_type;
    $apikey     = GetApikey($thisApikey);
    $APIs       = GetApiS($thisApi);
}
