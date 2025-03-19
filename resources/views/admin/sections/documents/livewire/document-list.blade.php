<div class="row">
    <div class="col">
        <div class="card" style="background-color: rgba(255,255,255,0.7)">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-auto">
                        <select class="custom-select w-auto" wire:model.live="paginate">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <input type="text" class="form-control" placeholder="Tìm kiếm" wire:model.live="params.fullname">
                    </div>
                    <div class="col-auto">
                        <input type="text" class="form-control daterange-picker cursor-pointer" 
                        readonly placeholder="Thời gian nộp hồ sơ" style="min-width: 15rem">
                    </div>
                    <div class="col-auto">
                        <select class="custom-select w-auto" wire:model.live="params.document_status_id">
                            <option value="">Tất cả trạng thái</option>
                            @foreach ($document_statuses as $status)
                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-bordered table-dark table-sm align-middle text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center" style="width: 5%">STT</th>
                                        <th scope="col" class="text-center" style="width: auto">Họ & Tên</th>
                                        <th scope="col" class="text-center" style="width: auto">Giấy</th>
                                        <th scope="col" class="text-center" style="width: auto">Thời gian nộp</th>
                                        <th scope="col" class="text-center" style="width: auto">Trạng thái</th>
                                        <th scope="col" class="text-center" style="width: 10%">Xem hồ sơ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($documents && count($documents) > 0)
                                    @php($sn = ($documents->perPage() * ($documents->currentPage() - 1)) + 1)
                                    @foreach ($documents as $key => $document)
                    
                                    <tr>
                                        <td class="text-center">{{ $sn++ }}</td>
                                        <td class="text-left text-wrap">{{ $document->fullname ?? '' }}</td>
                                        <td class="text-center">{{ $document->type->name ?? '' }}</td>
                                        <td class="text-center">{{ $document->created_at->format('d/m/Y H:i') }}</td>
                                        <td class="text-center">
                                            @php($badge = [1=>'warning', 2=>'success', 3=>'primary', 4=>'danger'])
                                            <span class="badge badge-{{ $badge[$document->document_status_id] }}">
                                                {{ $document->status->name }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.document-detail.index', ['id' => $document->id]) }}" 
                                            class="badge badge-sm badge-primary">
                                                <i class="icon-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                    
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6" class="text-center">(Danh sách trống)</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        @include('admin.components.livewire-table-nav', ['collection' => $documents])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('.daterange-picker').daterangepicker({
            parentEl: '.content-inner',
            autoUpdateInput: false,
            showDropdowns: true,
            opens: 'right',
            drops: 'down',
            locale: {
                applyLabel: 'OK',
                cancelLabel: 'Xóa',
                daysOfWeek: ['T2', 'T3', 'T4', 'T5', 'T6', 'T7','CN'],
                monthNames: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                firstDay: 1,
                format: 'DD/MM/YYYY',
            }
        }).on('cancel.daterangepicker', function(ev, picker) {
            $(this).val("");
            @this.set('params.created_at_start', null);
            @this.set('params.created_at_end', null);
        }).on('apply.daterangepicker', function(ev, picker) {
            var start_date = picker.startDate;
            var end_date = picker.endDate;
            $(this).val(start_date.format('DD/MM/YYYY')+' - '+end_date.format('DD/MM/YYYY'));
            @this.set('params.created_at_start', start_date.format('YYYY-MM-DD'));
            @this.set('params.created_at_end', end_date.format('YYYY-MM-DD'));
        });
    })
</script>
@endpush