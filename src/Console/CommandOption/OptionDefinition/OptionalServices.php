<?php

declare(strict_types=1);

namespace DefaultValue\Dockerizer\Console\CommandOption\OptionDefinition;

use DefaultValue\Dockerizer\Console\CommandOption\ValidationException as OptionValidationException;
use DefaultValue\Dockerizer\Docker\Compose\Composition\Service;
use Symfony\Component\Console\Input\InputOption;

/**
 * Very simple way to ask for additional services, all groups at once.
 * Ideally, it would be better to ask for every group one by one to eliminate the case when multiple services from the
 * same group are selected
 */
class OptionalServices extends \DefaultValue\Dockerizer\Console\CommandOption\OptionDefinition\Service\AbstractService
{
    public const OPTION_NAME = 'optional-services';

    public const SERVICE_TYPE = Service::TYPE_OPTIONAL;

    /**
     * @inheritDoc
     */
    public function getMode(): int
    {
        return InputOption::VALUE_OPTIONAL;
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'List of required services (comma-separated): --optional-service-redis=redis_5.0';
    }
}
