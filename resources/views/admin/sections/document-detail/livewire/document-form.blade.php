<div wire:ignore.self id="documentFormModal" class="modal fade" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" wire:loading.remove wire:target="getData">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="modal-body px-5">
                @include('admin.sections.document-detail.forms.'.$form_views[$document->document_type_id])
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
        $('#documentFormModal').on('show.bs.modal', function(e) {
            let documentId = e.relatedTarget.getAttribute('data-document-id') ?? 0;
            @this.call('get_data', documentId);
        });
    });
</script>
@endpush