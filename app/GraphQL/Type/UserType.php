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

namespace App\GraphQL\Type;

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

    /**
     * @Field
     */
    public function getMobile(): string
    {
        return $this->model->mobile;
    }

    /**
     * @Field
     */
    public function getAvatar(): string
    {
        return $this->model->avatar;
    }

    /**
     * @Field
     */
    public function getGender(): int
    {
        return $this->model->gender;
    }

    /**
     * @Field
     */
    public function getCreatedAt(): string
    {
        return $this->model->created_at->toDateTimeString();
    }

    /**
     * @Field
     */
    public function getUpdatedAt(): string
    {
        return $this->model->updated_at->toDateTimeString();
    }
}
