<div id="attachmentPreviewModal" class="modal fade" tabindex="-1" aria-modal="true" role="dialog" wire:ignore.self>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body px-3">
                <div class="row text-center">
                    <div class="col">
                        <img src="{{ $image_url }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('#attachmentPreviewModal').on('show.bs.modal', function(e) {
            let url = e.relatedTarget.getAttribute('data-src') ?? '';
            @this.set('image_url', url);
        });
        $('#attachmentPreviewModal').on('hidden.bs.modal', function(e) {
            @this.set('image_url', '');
        });
    });
</script>
@endpush