<div class="row">
    <div class="col">
        <div class="card" style="background-color: rgba(255,255,255,0.7)">

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-auto">
                        <select class="form-select custom-select w-auto" wire:model.live="paginate">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <input type="text" class="form-control" placeholder="Tìm kiếm" wire:model.live="params.name">
                    </div>
                    <div class="col text-right">
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#crudOrganizationModal">
                            <i class="icon-plus3 mr-2"></i>
                            Thêm mới
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table table-bordered table-dark table-sm align-middle text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center" style="width: 5%">STT</th>
                                        <th scope="col" class="text-center" style="width: auto">Tên tổ chức</th>
                                        <th scope="col" class="text-center" style="width: auto">Số điện thoại</th>
                                        <th scope="col" class="text-center" style="width: auto">Email</th>
                                        <th scope="col" class="text-center" style="width: 10%">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($organizations && count($organizations) > 0)
                                    @php($sn = ($organizations->perPage() * ($organizations->currentPage() - 1)) + 1)
                                    @foreach ($organizations as $key => $organization)
                    
                                    <tr>
                                        <td class="text-center">{{ $sn++ }}</td>
                                        <td class="text-left">{{ $organization->name ?? '' }}</td>
                                        <td class="text-center">{{ $organization->phone ?? '' }}</td>
                                        <td class="text-center">{{ $organization->email ?? '' }}</td>
                                        <td class="text-center">
                                            <span type="button" class="badge badge-sm badge-success" data-toggle="modal" 
                                            data-target="#crudOrganizationModal" data-organization-id="{{ $organization->id }}">
                                                <i class="icon-pencil5"></i>
                                            </span>
                                            <span type="button" class="badge badge-sm badge-danger" data-toggle="modal" 
                                            data-target="#crudOrganizationModal" data-organization-id="{{ -$organization->id }}">
                                                <i class="icon-trash"></i>
                                            </span>
                                        </td>
                                    </tr>
                    
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="5" class="text-center">(Danh sách trống)</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        @include('admin.components.livewire-table-nav', ['collection' => $organizations])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>