<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Logger;

use Doctrine\DBAL\Logging\SQLLogger;
use Psr\Log\LoggerInterface;
use Symfony\Component\Stopwatch\Stopwatch;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DbalLogger implements SQLLogger
{
    public const MAX_STRING_LENGTH = 32;
    public const BINARY_DATA_VALUE = '(binary value)';

    protected $logger;
    protected $stopwatch;

    public function __construct(?LoggerInterface $logger = null, ?Stopwatch $stopwatch = null)
    {
        $this->logger = $logger;
        $this->stopwatch = $stopwatch;
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function startQuery($sql, ?array $params = null, ?array $types = null)
    {
        if (null !== $this->stopwatch) {
            $this->stopwatch->start('doctrine', 'doctrine');
        }

        if (null !== $this->logger) {
            $this->log($sql, null === $params ? [] : $this->normalizeParams($params));
        }
    }

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function stopQuery()
    {
        if (null !== $this->stopwatch) {
            $this->stopwatch->stop('doctrine');
        }
    }

    /**
     * Logs a message.
     */
    protected function log(string $message, array $params)
    {
        $this->logger->debug($message, $params);
    }

    private function normalizeParams(array $params): array
    {
        foreach ($params as $index => $param) {
            // normalize recursively
            if (\is_array($param)) {
                $params[$index] = $this->normalizeParams($param);
                continue;
            }

            if (!\is_string($params[$index])) {
                continue;
            }

            // non utf-8 strings break json encoding
            if (!preg_match('//u', $params[$index])) {
                $params[$index] = self::BINARY_DATA_VALUE;
                continue;
            }

            // detect if the too long string must be shorten
            if (self::MAX_STRING_LENGTH < mb_strlen($params[$index], 'UTF-8')) {
                $params[$index] = mb_substr($params[$index], 0, self::MAX_STRING_LENGTH - 6, 'UTF-8').' [...]';
                continue;
            }
        }

        return $params;
    }
}
