<?php

/*
 * This file is part of the Superdesk Web Publisher MultiTenancy Component.
 *
 * Copyright 2016 Sourcefabric z.u. and contributors.
 *
 * For the full copyright and license information, please see the
 * AUTHORS and LICENSE files distributed with this source code.
 *
 * @copyright 2016 Sourcefabric z.ú
 * @license http://www.superdesk.org/license
 */

namespace SWP\Component\MultiTenancy\Exception;

class TenantNotFoundException extends \RuntimeException
{
    public function __construct($name, \Exception $previousException = null)
    {
        parent::__construct(sprintf('Tenant for host "%s" could not be found! Please check tenants configuration.', $name), 404, $previousException);
    }
}
