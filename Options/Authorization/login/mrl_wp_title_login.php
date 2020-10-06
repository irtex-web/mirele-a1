<?php

use Mirele\Framework\Customizer;
use Mirele\Framework\Option;

Customizer::add((new Option)
    ->setType("text")
    ->setDefault("Login to {WEBSITE_NAME}")
    ->setName("mrl_wp_title_login")
    ->setTitle("Enter the text under the login form header")
    ->setDescription("Enter the text under the title in the authorization form. Try to describe or tell the user the benefits of login on the site as briefly and locally as possible. ")
    ->setNamespace("@wc-login")
);
