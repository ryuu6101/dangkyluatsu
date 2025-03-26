<div class="row justify-content-center">
    <div class="col-6">
        <div class="card" style="background-color: rgba(255,255,255,0.7)">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto">
                        <select class="form-select form-select-sm custom-select mb-3 w-auto" wire:model="paginate">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <input type="text" class="form-control" placeholder="Tìm kiếm" wire:model.live="params.bank_name">
                    </div>
                    <div class="col text-right">
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#crudBankAccountModal">
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
                                        <th scope="col" class="text-center" style="width:5%">STT</th>
                                        <th scope="col" class="text-center">Ngân hàng</th>
                                        <th scope="col" class="text-center" style="width:15%">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($bank_accounts && count($bank_accounts) > 0)
                                    @php($sn = ($bank_accounts->perPage() * ($bank_accounts->currentPage() - 1)) + 1)
                                    @foreach ($bank_accounts as $key => $bank_account)
                    
                                    <tr>
                                        <td class="text-center">{{ $sn++ }}</td>
                                        <td class="text-left">{{ $bank_account->bank_name }}</td>
                                        <td class="text-center">
                                            <span type="button" class="badge badge-sm badge-success" 
                                            data-toggle="modal" data-target="#crudBankAccountModal" 
                                            data-bank-account-id="{{ $bank_account->id }}">
                                                <i class="icon-pencil5"></i>
                                            </span>
                                            <span type="button" class="badge badge-sm badge-danger" 
                                            data-toggle="modal" data-target="#crudBankAccountModal" 
                                            data-bank-account-id="{{ -$bank_account->id }}">
                                                <i class="icon-trash"></i>
                                            </span>
                                        </td>
                                    </tr>
                    
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="3" class="text-center">(Danh sách trống)</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        @include('admin.components.livewire-table-nav', ['collection' => $bank_accounts])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>