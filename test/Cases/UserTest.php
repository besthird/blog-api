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
        name,
        mobile
    }
}
GRAPHQL;

        $res = $this->query($query);

        $this->assertTrue(array_key_exists('data', $res));
        $this->assertTrue(array_key_exists('id', $res['data']['user']));
        $this->assertTrue(array_key_exists('name', $res['data']['user']));
    }

    public function testUserSave()
    {
        $query = <<<'GRAPHQL'
mutation {
    user(id: 1, input:{
        name: "limx",
        mobile: "13250874521",
        avatar: "https://avatars0.githubusercontent.com/u/16648551?s=460&v=4"
    }){
        id
    }
}
GRAPHQL;

        $res = $this->query($query);

        $this->assertTrue(array_key_exists('data', $res));
        $this->assertTrue(array_key_exists('id', $res['data']['user']));
    }
}
