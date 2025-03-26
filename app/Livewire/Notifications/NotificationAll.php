<?php

namespace App\Livewire\Notifications;

use Livewire\Component;
use App\Repositories\Notifications\NotificationRepositoryInterface;

class NotificationAll extends Component
{
    protected $notificationRepos;

    public $user;
    public $params = [];

    public function boot(
        NotificationRepositoryInterface $notificationRepos,
    ) {
        $this->notificationRepos = $notificationRepos;
    }

    public function mount() {
        $this->user = auth()->guard('web')->user();
        $this->params['user_id'] = $this->user->id;
    }

    public function goToLink($id) {
        $notification = $this->notificationRepos->find($id);
        $notification->update(['read' => 1]);
        $this->redirect($notification->link);
    }

    public function render()
    {
        $notifications = $this->notificationRepos->filter($this->params, 0, 'desc');
        return view('user.sections.notifications.livewire.notification-all')->with([
            'notifications' => $notifications,
        ]);
    }
}
