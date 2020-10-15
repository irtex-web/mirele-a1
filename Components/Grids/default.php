<?php

namespace Mirele\Components;

use Mirele\Compound\Component;
use Mirele\Compound\Store;
use Mirele\TWIG;

$Component = new Component ();
$Component->setId('default_grid');
$Component->setProps([]);
$Component->setHandler("output", function ($props) {

    $props = (object) $props;

    TWIG::Render('Components/default_grid', $props);

});

Store::add($Component);