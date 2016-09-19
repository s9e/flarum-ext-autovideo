<?php

/**
* @package   s9e\autovideo
* @copyright Copyright (c) 2016 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\Flarum\Autovideo;

use Flarum\Event\ConfigureFormatter;
use Illuminate\Events\Dispatcher;

function subscribe(Dispatcher $events)
{
	$events->listen(
		ConfigureFormatter::class,
		function (ConfigureFormatter $event)
		{
			if (!isset($event->configurator->tags['VIDEO']))
			{
				$tag = $event->configurator->tags->add('VIDEO');
				$tag->attributes->add('src')->filterChain->append('#url');
				$tag->template = '<video controls="" src="{@src}"/>';
			}
			$event->configurator->Preg->match(
				'#\\b(?<src>https?://[-.\\w]+/[-./\\w]+\\.(?:mp4|ogg|webm))(?!\\S)#i',
				'VIDEO'
			);
		}
	);
};

return __NAMESPACE__ . '\\subscribe';