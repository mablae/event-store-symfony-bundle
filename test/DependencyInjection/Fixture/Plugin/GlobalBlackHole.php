<?php
/**
 * prooph (http://getprooph.org/)
 *
 * @see       https://github.com/prooph/event-store-symfony-bundle for the canonical source repository
 * @copyright Copyright (c) 2016 prooph software GmbH (http://prooph-software.com/)
 * @license   https://github.com/prooph/event-store-symfony-bundle/blob/master/LICENSE.md New BSD License
 */
declare(strict_types=1);

namespace ProophTest\Bundle\EventStore\DependencyInjection\Fixture\Plugin;

use Prooph\EventStore\EventStore;
use Prooph\EventStore\Plugin\Plugin;

class GlobalBlackHole implements Plugin
{
    public $valid = false;

    public function setUp(EventStore $eventStore)
    {
        $this->valid = true;
    }
}
