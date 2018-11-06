<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

use Monolog\Formatter\FormatterInterface;
<<<<<<< HEAD
=======
use Monolog\ResettableInterface;
>>>>>>> f5419e6ecc604596cfea4376a846e046e055eb0d

/**
 * Forwards records to multiple handlers
 *
 * @author Lenar Lõhmus <lenar@city.ee>
 */
class GroupHandler extends AbstractHandler
{
    protected $handlers;

    /**
<<<<<<< HEAD
     * @param array   $handlers Array of Handlers.
     * @param Boolean $bubble   Whether the messages that are handled can bubble up the stack or not
=======
     * @param array $handlers Array of Handlers.
     * @param bool  $bubble   Whether the messages that are handled can bubble up the stack or not
>>>>>>> f5419e6ecc604596cfea4376a846e046e055eb0d
     */
    public function __construct(array $handlers, $bubble = true)
    {
        foreach ($handlers as $handler) {
            if (!$handler instanceof HandlerInterface) {
                throw new \InvalidArgumentException('The first argument of the GroupHandler must be an array of HandlerInterface instances.');
            }
        }

        $this->handlers = $handlers;
        $this->bubble = $bubble;
    }

    /**
     * {@inheritdoc}
     */
    public function isHandling(array $record)
    {
        foreach ($this->handlers as $handler) {
            if ($handler->isHandling($record)) {
                return true;
            }
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(array $record)
    {
        if ($this->processors) {
            foreach ($this->processors as $processor) {
                $record = call_user_func($processor, $record);
            }
        }

        foreach ($this->handlers as $handler) {
            $handler->handle($record);
        }

        return false === $this->bubble;
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array $records)
    {
        if ($this->processors) {
            $processed = array();
            foreach ($records as $record) {
                foreach ($this->processors as $processor) {
                    $processed[] = call_user_func($processor, $record);
                }
            }
            $records = $processed;
        }

        foreach ($this->handlers as $handler) {
            $handler->handleBatch($records);
        }
    }

<<<<<<< HEAD
=======
    public function reset()
    {
        parent::reset();

        foreach ($this->handlers as $handler) {
            if ($handler instanceof ResettableInterface) {
                $handler->reset();
            }
        }
    }

>>>>>>> f5419e6ecc604596cfea4376a846e046e055eb0d
    /**
     * {@inheritdoc}
     */
    public function setFormatter(FormatterInterface $formatter)
    {
        foreach ($this->handlers as $handler) {
            $handler->setFormatter($formatter);
        }

        return $this;
    }
}
