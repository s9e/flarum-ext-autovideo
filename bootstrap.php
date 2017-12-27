<?php

/**
* @package   s9e\autovideo
* @copyright Copyright (c) 2016-2017 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\Flarum\Autovideo;

use Flarum\Formatter\Event\Configuring;
use Illuminate\Events\Dispatcher;

function subscribe(Dispatcher $events)
{
	$events->listen(
		Configuring::class,
		function (Configuring $event)
		{
			$event->configurator->Autovideo;
		}
	);
};

return __NAMESPACE__ . '\\subscribe';