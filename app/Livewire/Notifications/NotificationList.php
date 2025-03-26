<?php

namespace App\Livewire\Notifications;

use Livewire\Component;
use App\Repositories\Notifications\NotificationRepositoryInterface;

class NotificationList extends Component
{
    protected $notificationRepos;

    public $user;

    public function boot(
        NotificationRepositoryInterface $notificationRepos,
    ) {
        $this->notificationRepos = $notificationRepos;
    }

    public function mount() {
        $this->user = auth()->guard('web')->user();
    }

    public function goToLink($id) {
        $notification = $this->notificationRepos->find($id);
        $notification->update(['read' => 1]);
        $this->redirect($notification->link);
    }

    public function render()
    {
        $notifications = $this->user->notifications->sortByDesc('created_at');
        $unread_notifications = $notifications->where('read', 0);
        return view('user.layouts.livewire.notification-list')->with([
            'notifications' => $notifications,
            'unread_notifications' => $unread_notifications,
        ]);
    }
}
