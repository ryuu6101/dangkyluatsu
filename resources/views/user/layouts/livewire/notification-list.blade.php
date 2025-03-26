<li class="nav-item nav-item-dropdown-lg dropdown dropdown-user h-100" wire:ignore.self wire:poll.60s>
    <a href="#!" class="navbar-nav-link navbar-nav-link-toggler" data-toggle="dropdown" aria-expanded="false" wire:ignore.self>
        <div class="d-flex align-items-center justify-content-center text-muted bg-white rounded-circle"
        style="height:45px;aspect-ratio:1/1">
            <i class="icon-bell2" style="font-size: 1.5rem"></i>
        </div>
        @if ($unread_count = $unread_notifications->count())
        <strong class="badge badge-danger badge-pill ml-auto ml-lg-0" style="top:.2rem;right:.5rem">
            {{ $unread_count <= 99 ? $unread_count : '99+' }}
        </strong>
        @endif
    </a>
    
    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-lg-400" wire:ignore.self>
        <div class="dropdown-content-header">
            <span class="font-weight-semibold">Thông báo</span>
            <a href="{{ route('notifications.index') }}" class="text-body">
                <i class="icon-compose"></i>
            </a>
        </div>

        <div class="dropdown-content-body dropdown-scrollable px-0">
            <ul class="media-list media-list-linked">
                @if ($notifications->count())
                @foreach ($notifications->take(10) as $notification)
                <li>
                    <a href="#!" class="media" wire:click.prevent="goToLink({{ $notification->id }})">
                        <div class="mr-3 position-relative">
                            <img src="{{ asset($notification->user->profile_pic) }}" width="36" height="36" class="rounded-circle" alt="">
                        </div>

                        <div class="media-body">
                            <div class="media-title">
                                <span class="font-weight-semibold {{ $notification->read ? 'text-muted' : '' }}">
                                    {{ $notification->title }}
                                </span>
                                @if (!$notification->read)
                                <i class="icon-primitive-dot text-success float-right"></i>
                                @endif
                            </div>

                            <span class="text-muted">{{ $notification->content }}</span>

                            <div class="text-muted font-size-sm mt-2">
                                @if ($notification->created_at->isToday())
                                {{ $notification->created_at->format('H:s') }}
                                @elseif ($notification->created_at->isYesterday())
                                {{ 'Hôm qua lúc '.$notification->created_at->format('H:s') }}
                                @elseif ($notification->created_at->diffInDays(now()) < 30)
                                {{ $notification->created_at->diffInDays(now()).' ngày trước' }}
                                @elseif ($notification->created_at->diffInMonths(now()) < 12)
                                {{ $notification->created_at->diffInMonths(now()).' tháng trước' }}
                                @else
                                {{ $notification->created_at->diffInYears(now()).' năm trước' }}
                                @endif
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
                @else
                <div class="text-center py-2">
                    <span>(Không có thông báo)</span>
                </div>
                @endif
            </ul>
        </div>
    </div>
</li>