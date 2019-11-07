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

namespace App\Service\Type;

use App\Model\User;
use Hyperf\GraphQL\Annotation\Field;
use Hyperf\GraphQL\Annotation\Type;

/**
 * @Type
 */
class UserType
{
    /**
     * @var User
     */
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * @Field
     */
    public function getId(): int
    {
        return $this->model->id;
    }

    /**
     * @Field
     */
    public function getName(): string
    {
        return $this->model->name;
    }
}
