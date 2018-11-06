<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Processor;

/**
 * Adds a tags array into record
 *
 * @author Martijn Riemers
 */
<<<<<<< HEAD
class TagProcessor
=======
class TagProcessor implements ProcessorInterface
>>>>>>> f5419e6ecc604596cfea4376a846e046e055eb0d
{
    private $tags;

    public function __construct(array $tags = array())
    {
        $this->setTags($tags);
    }

    public function addTags(array $tags = array())
    {
        $this->tags = array_merge($this->tags, $tags);
    }

    public function setTags(array $tags = array())
    {
        $this->tags = $tags;
    }

    public function __invoke(array $record)
    {
        $record['extra']['tags'] = $this->tags;

        return $record;
    }
}
