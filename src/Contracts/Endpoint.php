<?php

/*
 * This file is part of Laravel Paymill.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Paymill\Contracts;

interface Endpoint
{
    public function create($parameters);

    public function read($id);

    public function update($id, $parameters);

    public function destroy($id);

    public function lists();

    public function cancel($id);

    public function export();
}
