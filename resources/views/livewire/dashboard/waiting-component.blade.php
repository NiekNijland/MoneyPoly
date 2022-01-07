<div class="card">
    <div class="card-header border-0 pt-6">
        <div class="card-title">
            @if ($players->count() > 1)
                {{ __('game.waiting_to_start') }}
            @else
                {{ __('game.waiting_for_players') }}
            @endif
        </div>
        <div class="card-toolbar">
            <div class="d-flex justify-content-end">
                <button type="button" {{ ($players->count() === 1) ? 'disabled' : '' }} class="btn btn-primary" wire:click="start">
                    {{ __('game.start') }}
                </button>
            </div>
        </div>
    </div>
    <div class="card-body py-4">
        <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_table_users">
                    <thead>
                        <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                            <th class="min-w-125px">{{ __('player.player') }}</th>
                            <th class="text-end min-w-100px sorting_disabled">{{ $isAdmin ? __('general.actions') : '' }}</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-bold">
                        @foreach ($players as $index => $player)
                            <tr wire:key="{{ $index }}">
                                <td class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a>
                                            <div class="symbol-label fs-3 bg-light-danger text-danger">{{ strtoupper($player->name[0]) }}</div>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a class="text-gray-800 mb-1">
                                            {{ $player->name }}<span class="badge badge-light-success fw-bolder ms-3">{{ __('game.leader') }}</span>
                                        </a>
                                    </div>
                                </td>
                                <td class="text-end">
                                    @if ($isAdmin)
                                        <a href="#" class="btn btn-light btn-light-danger btn-xl">
                                            Kick
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
