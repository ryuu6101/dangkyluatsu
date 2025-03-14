<div class="modal fade" id="{{ $uploader_id ?? '' }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thêm tài liệu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="attachment[{{ $uploader_id ?? '' }}][title]" value="{{ $attachment_title ?? '' }}">
                <input type="file" class="file-input-custom" data-browse-on-zone-click="true" data-browse-class="btn btn-block btn-primary"
                data-show-remove="false" data-show-caption="false" data-show-upload="false" data-uploader-id="{{ $uploader_id ?? '' }}" 
                data-fouc multiple accept="image/*" name="attachment[{{ $uploader_id ?? '' }}][files]" form="{{ $form_id ?? '' }}">
            </div>
        </div>
    </div>
</div>