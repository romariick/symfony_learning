<?php

spl_autoload_register(function ($a) {
    echo 'I am at the top of the auto-loaders stack';
}, true, true);

if (class_exists('\Exception', true)) {
    echo 'Loaded';
}