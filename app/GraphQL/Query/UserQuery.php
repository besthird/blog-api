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

namespace App\GraphQL\Query;

use App\GraphQL\Type\UserType;
use App\Model\User;
use Hyperf\GraphQL\Annotation\Query;

class UserQuery
{
    /**
     * @Query
     */
    public function user(int $id): UserType
    {
        $model = User::query()->find($id);
        return new UserType($model);
    }
}
