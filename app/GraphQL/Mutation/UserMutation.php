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

namespace App\GraphQL\Mutation;

use App\GraphQL\Input\UserInput;
use App\GraphQL\Type\UserType;
use App\Model\User;
use Hyperf\GraphQL\Annotation\Mutation;

class UserMutation
{
    /**
     * @Mutation
     */
    public function user(int $id, UserInput $input): ?UserType
    {
        if ($id > 0) {
            $model = User::query()->find($id);
            if (empty($model)) {
                return null;
            }
        } else {
            $model = new User();
        }

        if (! empty($input->name)) {
            $model->name = $input->name;
        }

        if (! empty($input->mobile)) {
            $model->mobile = $input->mobile;
        }

        if (! empty($input->password)) {
            $model->password = password_hash($input->password, PASSWORD_DEFAULT);
        }

        if (! empty($input->avatar)) {
            $model->avatar = $input->avatar;
        }

        if (isset($input->gender)) {
            $model->gender = $input->gender;
        }

        $model->save();

        return new UserType($model);
    }
}
