<?php

namespace App\Repositories\Notifications;

use App\Models\Notification;
use App\Repositories\BaseRepository;

class NotificationRepository extends BaseRepository implements NotificationRepositoryInterface
{
    public function getModel() {
        return Notification::class;
    }

    public function getUnread($user_id = 0) {
        if ($user_id <= 0) return $this->model->where('read', 0)->get();
        return $this->model->where('user_id', $user_id)->where('read', 0)->get();
    }
}