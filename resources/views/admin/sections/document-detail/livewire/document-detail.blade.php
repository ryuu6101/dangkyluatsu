<div class="col">
    <div class="card h-100" style="background-color: rgba(255,255,255,0.7)">
        <div class="card-header">
            <h1 class="text-uppercase">
                <i class="icon-user-tie icon-2x mr-2"></i>
                <strong>{{ $document->fullname }}</strong>
            </h1>
        </div>
        <div class="card-body px-4">
            <div class="row">
                <div class="col">
                    <h4 class="text-muted text-uppercase">
                        <strong>I. Chi tiết hồ sơ</strong>
                    </h4>
                </div>
            </div>
            <div class="row mb-3 pl-3">
                <div class="col">
                    <a href="#!" class="text-dark d-block mb-2" data-toggle="modal" 
                    data-target="#documentFormModal" data-document-id="{{ $document->id }}">
                        <strong>
                            <i class="icon-file-text3 mr-2"></i>
                            <u>{{ $document->type->name }}</u>
                        </strong>
                    </a>

                    @if ($secondary_document = $document->secondary_document)
                    <a href="#!" class="text-dark d-block mb-2" data-toggle="modal" 
                    data-target="#documentFormModal" data-document-id="{{ $secondary_document->id }}">
                        <strong>
                            <i class="icon-file-text3 mr-2"></i>
                            <u>{{ $secondary_document->type->name }}</u>
                        </strong>
                    </a>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="text-muted text-uppercase">
                        <strong>II. Hồ sơ đính kèm</strong>
                    </h4>
                </div>
            </div>
            <div class="row mb-2 pl-3">
                <div class="col">
                    @foreach ($document->attachments->merge($document->secondary_document->attachments ?? []) as $attachment)
                    <strong class="d-block mt-2">
                        {{ $loop->iteration }}. 
                        {{ $attachment->name }} 
                        <span class="text-primary text-nowrap ml-2">({{ $attachment->files->count() }} file)</span>
                    </strong>
                    @foreach ($attachment->files as $file)
                    <a href="#!" class="d-block mb-1 ml-3 text-dark" data-toggle="modal" 
                    data-target="#attachmentPreviewModal" data-src="{{ asset($file->file) }}">
                        <i class="icon-files-empty2 mr-2"></i>
                        <u>{{ $file->name }}</u>
                    </a>
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            @if (($status = $document->document_status_id) == 1)
            <button type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#documentApproveModal">
                Duyệt hồ sơ
            </button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#documentDeclineModal">
                Từ chối
            </button>
            @elseif ($status == 2)
            <button type="button" class="btn btn-outline-success mr-2" disabled>
                Đang trong quá trình
            </button>
            @elseif ($status == 3)
            <button type="button" class="btn btn-outline-primary mr-2" disabled>
                <i class="icon-checkmark2 mr-2"></i>
                Đã hoàn thành
            </button>
            @elseif ($status == 4)
            <button type="button" class="btn btn-outline-danger mr-2" disabled>
                <i class="icon-cross3"></i>
                Đã bị từ chối
            </button>
            @endif
        </div>
    </div>
</div>