<?php

if (sizeof($argv) === 1) {

    echo <<<EOL
Parameter error! You need set a parameter.

Usage:
    php cakephp3-samples [name]
    php cakephp3-samples Auth.login
    php cakephp3-samples help

[name]
    help
    version
    Auth.login
    Auth.login_without_hash
    ...

    see full lists at https://github.com/kilfu0701/cakephp3-samples

EOL;

    exit;
}

echo 'index';

