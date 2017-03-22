<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-jquery-nestable')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-jquery')
    ->jsPackage('jquery.nestable.js')
    ->cssPackage('jquery.nestable.css')
;