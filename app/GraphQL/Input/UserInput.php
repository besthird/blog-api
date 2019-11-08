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

namespace App\GraphQL\Input;

class UserInput
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var null|string
     */
    public $mobile;

    /**
     * @var null|string
     */
    public $password;

    /**
     * @var null|string
     */
    public $avatar;

    /**
     * @var null|int
     */
    public $gender;

    public function __construct(string $name, ?string $mobile, ?string $password, ?string $avatar, ?int $gender)
    {
        $this->name = $name;
        $this->mobile = $mobile;
        $this->password = $password;
        $this->avatar = $avatar;
        $this->gender = $gender;
    }
}
