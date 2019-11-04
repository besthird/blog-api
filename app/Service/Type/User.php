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

use Hyperf\GraphQL\Annotation\Field;
use Hyperf\GraphQL\Annotation\Type;

/**
 * @Type
 */
class User
{
    public function __construct()
    {
    }

    /**
     * @Field
     */
    public function getId(): int
    {
        return 1;
    }
}
