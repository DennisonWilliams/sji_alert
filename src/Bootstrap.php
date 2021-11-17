<?php
/**
 * Bootstrap custom module skeleton.  This file is an example custom module that can be used
 * to create modules that can be utilized inside the OpenEMR system.  It is NOT intended for
 * production and is intended to serve as the barebone requirements you need to get started
 * writing modules that can be installed and used in OpenEMR.
 *
 * @package   OpenEMR
 * @link      http://www.open-emr.org
 *
 * @author    Stephen Nielson <stephen@nielson.org>
 * @copyright Copyright (c) 2021 Stephen Nielson <stephen@nielson.org>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */

namespace OpenEMR\Modules\SJIAlert;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Note the below use statements are importing classes from the OpenEMR core codebase
 */
use OpenEMR\Menu\MenuEvent;
use OpenEMR\Events\RestApiExtend\RestApiCreateEvent;

class Bootstrap
{
    const MODULE_INSTALLATION_PATH = "";
    const MODULE_NAME = "sji-alert";
	/**
	 * @var EventDispatcherInterface The object responsible for sending and subscribing to events through the OpenEMR system
	 */
	private $eventDispatcher;

	public function __construct(EventDispatcherInterface $eventDispatcher)
	{
	    $this->eventDispatcher = $eventDispatcher;
	}

	public function subscribeToEvents()
	{
		$this->eventDispatcher->addListener(RenderEvent::EVENT_SECTION_LIST_RENDER_AFTER, [$this, 'addSJIAlert']);
	}

	public function addSJIAlert(RenderEvent $event) {
		$pid = $event->getPid();

		// TODO: If there are any active alerts for the participant 
		// then we should click on a link to the alert pop up with js
	}

}
