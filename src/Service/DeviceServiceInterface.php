<?php
/**
 * @see https://github.com/dotkernel/blizz-agent-sniffer for the canonical source repository
 * @copyright Copyright (c) 2021 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/blizz-agent-sniffer/blob/master/LICENSE MIT License
 */

declare(strict_types=1);

namespace Divineblizz\AgentSniffer\Service;

use Divineblizz\AgentSniffer\Data\DeviceData;

/**
 * Interface DeviceServiceInterface
 * @package Divineblizz\AgentSniffer\Service
 */
interface DeviceServiceInterface
{
    /**
     * @param string $userAgent
     * @return DeviceData
     */
    public function getDetails(string $userAgent): DeviceData;
}
