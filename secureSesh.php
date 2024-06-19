<?php

ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);

session_set_cookie_params([
    "lifetime" => "3600", //seconds so 1 hour
    "domain" => "localhost",
    "path" => "/", //any file in the directory
    "secure" => true,
    "httponly" => true,

]);
session_start();
if (!isset($_SESSION["timeOfTheCookie"])) {
    session_regenerate_id();
    $_SESSION["timeOfTheCookie"] = time();
} else {
    $cookieTimer = 60 * 60; // in seconds so 1 hour
    if (time() - $_SESSION["timeOfTheCookie"] >= $cookieTimer) {
        session_regenerate_id();
        $_SESSION["timeOfTheCookie"] = time();
    }
}
