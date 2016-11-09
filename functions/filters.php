<?php

add_filter('timber_context', function ($context) {
    $context['menu'] = new TimberMenu();
    return $context;
});

add_filter('get_twig', function ($twig) {

    $twig->addFunction(new Twig_SimpleFunction('has_category', 'has_category'));

    $twig->addFunction(new Twig_SimpleFunction('debug', function ($obj) {
        var_dump($obj);
    }));

    return $twig;
});

add_filter('acf/fields/google_map/api', function ($api) {
    $api['key'] = 'AIzaSyBImy0ia-fa4Dx8TDop4U6DnESFOErpzWY';
    return $api;
});
