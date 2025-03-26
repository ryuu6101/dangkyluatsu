<div class="row justify-content-center">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title font-weight-bold">Thông báo</h4>
            </div>
            <div class="card-body px-0">
                <div class="row px-4 mb-2">
                    <div class="col-auto">
                        <input type="text" class="form-control form-control-sm w-auto" placeholder="Tìm kiếm" wire:model.live="params.text">
                    </div>
                    <div class="col-auto">
                        <select class="form-control form-control-sm" wire:model.live="params.read">
                            <option value="">Tất cả</option>
                            <option value="0">Chưa đọc</option>
                        </select>
                    </div>
                </div>
                <ul class="media-list media-list-linked" style="max-height:60vh;overflow-y:scroll">
                    @if ($notifications->count())
                    @foreach ($notifications as $notification)
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
    </div>
</div>