<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Formatter;

use Monolog\Logger;
use Monolog\TestCase;

class FluentdFormatterTest extends TestCase
{
    /**
     * @covers Monolog\Formatter\FluentdFormatter::__construct
     * @covers Monolog\Formatter\FluentdFormatter::isUsingLevelsInTag
     */
    public function testConstruct()
    {
        $formatter = new FluentdFormatter();
        $this->assertEquals(false, $formatter->isUsingLevelsInTag());
        $formatter = new FluentdFormatter(false);
        $this->assertEquals(false, $formatter->isUsingLevelsInTag());
        $formatter = new FluentdFormatter(true);
        $this->assertEquals(true, $formatter->isUsingLevelsInTag());
    }

    /**
     * @covers Monolog\Formatter\FluentdFormatter::format
     */
    public function testFormat()
    {
        $record = $this->getRecord(Logger::WARNING);
        $record['datetime'] = new \DateTime("@0");

        $formatter = new FluentdFormatter();
        $this->assertEquals(
<<<<<<< HEAD
            '["test",0,{"message":"test","extra":[],"level":300,"level_name":"WARNING"}]',
=======
            '["test",0,{"message":"test","context":[],"extra":[],"level":300,"level_name":"WARNING"}]',
>>>>>>> f5419e6ecc604596cfea4376a846e046e055eb0d
            $formatter->format($record)
        );
    }

    /**
     * @covers Monolog\Formatter\FluentdFormatter::format
     */
    public function testFormatWithTag()
    {
        $record = $this->getRecord(Logger::ERROR);
        $record['datetime'] = new \DateTime("@0");

        $formatter = new FluentdFormatter(true);
        $this->assertEquals(
<<<<<<< HEAD
            '["test.error",0,{"message":"test","extra":[]}]',
=======
            '["test.error",0,{"message":"test","context":[],"extra":[]}]',
>>>>>>> f5419e6ecc604596cfea4376a846e046e055eb0d
            $formatter->format($record)
        );
    }
}
