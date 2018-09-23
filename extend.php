<?php

/**
* @package   s9e\autovideo
* @copyright Copyright (c) 2016-2017 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\Flarum\Autovideo;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Formatter())
        ->configure(function (Configurator $configurator) {
            $configurator->Autovideo;
        })
];