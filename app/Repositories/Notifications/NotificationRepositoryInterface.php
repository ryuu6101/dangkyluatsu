<?php

namespace App\Repositories\Notifications;

use App\Repositories\RepositoryInterface;

interface NotificationRepositoryInterface extends RepositoryInterface
{
    public function getUnread($user_id = 0);
}