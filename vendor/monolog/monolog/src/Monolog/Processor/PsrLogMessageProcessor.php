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
use Monolog\Utils;

>>>>>>> f5419e6ecc604596cfea4376a846e046e055eb0d
/**
 * Processes a record's message according to PSR-3 rules
 *
 * It replaces {foo} with the value from $context['foo']
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
<<<<<<< HEAD
class PsrLogMessageProcessor
=======
class PsrLogMessageProcessor implements ProcessorInterface
>>>>>>> f5419e6ecc604596cfea4376a846e046e055eb0d
{
    /**
     * @param  array $record
     * @return array
     */
    public function __invoke(array $record)
    {
        if (false === strpos($record['message'], '{')) {
            return $record;
        }

        $replacements = array();
        foreach ($record['context'] as $key => $val) {
            if (is_null($val) || is_scalar($val) || (is_object($val) && method_exists($val, "__toString"))) {
                $replacements['{'.$key.'}'] = $val;
            } elseif (is_object($val)) {
<<<<<<< HEAD
                $replacements['{'.$key.'}'] = '[object '.get_class($val).']';
=======
                $replacements['{'.$key.'}'] = '[object '.Utils::getClass($val).']';
>>>>>>> f5419e6ecc604596cfea4376a846e046e055eb0d
            } else {
                $replacements['{'.$key.'}'] = '['.gettype($val).']';
            }
        }

        $record['message'] = strtr($record['message'], $replacements);

        return $record;
    }
}
