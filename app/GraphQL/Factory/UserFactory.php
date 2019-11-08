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

namespace App\GraphQL\Factory;

use App\GraphQL\Input\UserInput;
use Hyperf\GraphQL\Annotation\Factory;

class UserFactory
{
    /**
     * @Factory
     */
    public function createUserInput(string $name, ?string $mobile, ?string $password, ?string $avatar, ?int $gender): UserInput
    {
        return new UserInput(...func_get_args());
    }
}
