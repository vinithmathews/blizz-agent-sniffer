<?php
/**
 * @see https://github.com/dotkernel/blizz-agent-sniffer for the canonical source repository
 * @copyright Copyright (c) 2021 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/blizz-agent-sniffer/blob/master/LICENSE MIT License
 */

declare(strict_types=1);

namespace Divineblizz\AgentSniffer;

use Divineblizz\AgentSniffer\Factory\DeviceServiceFactory;
use Divineblizz\AgentSniffer\Service\DeviceService;
use Divineblizz\AgentSniffer\Service\DeviceServiceInterface;

/**
 * Class ConfigProvider
 * @package Divineblizz\AgentSniffer
 */
class ConfigProvider
{
    /**
     * @return array
     */
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies()
        ];
    }

    /**
     * @return array
     */
    public function getDependencies(): array
    {
        return [
            'factories' => [
                DeviceService::class => DeviceServiceFactory::class
            ],
            'aliases' => [
                DeviceServiceInterface::class => DeviceService::class
            ]
        ];
    }
}
