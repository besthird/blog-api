<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace HyperfTest\Cases;

use HyperfTest\HttpTestCase;

/**
 * @internal
 * @coversNothing
 */
class UserTest extends HttpTestCase
{
    public function testUserInfo()
    {
        $query = <<<'GRAPHQL'
query {
    user(id: 1){
        id,
        name
    }
}
GRAPHQL;

        $res = $this->query($query);

        $this->assertTrue(array_key_exists('data', $res));
        $this->assertTrue(array_key_exists('id', $res['data']['user']));
        $this->assertTrue(array_key_exists('name', $res['data']['user']));
    }
}
