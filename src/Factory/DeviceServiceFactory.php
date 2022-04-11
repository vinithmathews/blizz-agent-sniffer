<?php
/**
 * @see https://github.com/dotkernel/blizz-agent-sniffer for the canonical source repository
 * @copyright Copyright (c) 2021 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/blizz-agent-sniffer/blob/master/LICENSE MIT License
 */

declare(strict_types=1);

namespace Divineblizz\AgentSniffer\Factory;

use DeviceDetector\DeviceDetector;
use Divineblizz\AgentSniffer\Service\DeviceService;
use Psr\Container\ContainerInterface;

/**
 * Class DeviceServiceFactory
 * @package Divineblizz\AgentSniffer\Factory
 */
class DeviceServiceFactory
{
    /**
     * @param ContainerInterface $container
     * @return DeviceService
     */
    public function __invoke(ContainerInterface $container): DeviceService
    {
        return new DeviceService(
            new DeviceDetector()
        );
    }
}
