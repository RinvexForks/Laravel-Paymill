<?php

/*
 * This file is part of Laravel Paymill.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Paymill\Endpoints;

class Subscription extends Endpoint
{
    protected $namespace = 'subscriptions';

    protected $transformer = \BrianFaust\Paymill\Transformers\Subscription::class;
}
