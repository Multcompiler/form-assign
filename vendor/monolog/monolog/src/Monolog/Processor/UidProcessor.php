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

<<<<<<< HEAD
=======
use Monolog\ResettableInterface;

>>>>>>> f5419e6ecc604596cfea4376a846e046e055eb0d
/**
 * Adds a unique identifier into records
 *
 * @author Simon Mönch <sm@webfactory.de>
 */
<<<<<<< HEAD
class UidProcessor
=======
class UidProcessor implements ProcessorInterface, ResettableInterface
>>>>>>> f5419e6ecc604596cfea4376a846e046e055eb0d
{
    private $uid;

    public function __construct($length = 7)
    {
        if (!is_int($length) || $length > 32 || $length < 1) {
            throw new \InvalidArgumentException('The uid length must be an integer between 1 and 32');
        }

<<<<<<< HEAD
        $this->uid = substr(hash('md5', uniqid('', true)), 0, $length);
=======

        $this->uid = $this->generateUid($length);
>>>>>>> f5419e6ecc604596cfea4376a846e046e055eb0d
    }

    public function __invoke(array $record)
    {
        $record['extra']['uid'] = $this->uid;

        return $record;
    }

    /**
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }
<<<<<<< HEAD
=======

    public function reset()
    {
        $this->uid = $this->generateUid(strlen($this->uid));
    }

    private function generateUid($length)
    {
        return substr(hash('md5', uniqid('', true)), 0, $length);
    }
>>>>>>> f5419e6ecc604596cfea4376a846e046e055eb0d
}
