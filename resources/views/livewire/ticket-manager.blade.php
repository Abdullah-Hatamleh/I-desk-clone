<div>
    <div class="container">
        <div class="mb-1 row">
            <div class="col-sm-12">
                <div class="p-3 border border-0 rounded shadow card">
                    <div class="card-body row">
                        <div class="col-8">
                            <h5 class="mb-3 card-title">
                                All Tickets
                                <span class="tw-text-grey-700 tw-text-sm text-secondary">
                                    {{ $tickets->count() }} tickets
                                </span>

                                <p class="card-text text-secondary">Find all tickets on this page and its respective
                                    details.</p>

                            </h5>
                        </div>
                        <div class="col-4">
                            <div class=" d-flex justify-content-end">
                                <div class="mx-2 mt-10 center" style="cursor: pointer" wire:click="refreshTickets">
                                    <img id="col_img" class="tw-p-[10px] b-white tw-rounded-[10px] shadow"
                                        src="{{ asset('Vector12.png') }}" alt="mdo" width="45" height="45">
                                </div>
                                <div class="mt-10">
                                    <button wire:click="$dispatch('navigate', {page : 'create'})"
                                        class="btn btn-success w-px-200"
                                        style="float: right; display: flex; align-items: center; justify-content: center; height: 44px; background: #00a34e;">
                                        <i class="fa fa-plus" style="margin-right: 5px;"></i>
                                        <span style="text-align: center;">Create ticket</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="shadow">
                    <div class="mb-2 table-responsive card">
                        <table class="table table-bordered table-hover card-text">
                            <thead class="text-center">
                                <tr>
                                    <th>Ticket Id</th>
                                    <th>Customer Name</th>
                                    <th>Department</th>
                                    <th>Level</th>
                                    <th>Source</th>
                                    <th>Type</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Comment</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody class="table-body-style">
                                {{-- example ticket for later filling --}}
                                @foreach ($tickets as $ticket)
                                    <tr style="opacity: 1;cursor: pointer"
                                        @if ($ticket->attachment) onclick="window.open('{{ Storage::url($ticket->attachment) }}', '_blank')"
    @else
        onclick="alert('No attachment for this ticket.')" @endif>

                                        <td scope="row" class="text-center checked"
                                            style="background: white !important;">
                                            <span class="t-id" style="">
                                                #{{ $ticket['id'] }}
                                            </span>

                                        </td>


                                        <td class="px-3 txt_cen" style="white-space: nowrap;">
                                            @if ($ticket->customer_name)
                                                <img id="col_img" class="mr-10 " src="{{ asset('user.png') }}"
                                                    alt="mdo" width="25" height="25">

                                                <span>
                                                    {{ $ticket['customer_name'] }}
                                                </span>
                                            @else
                                                <span class="text-secondary">
                                                    Not Available
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-3 txt_cen" style="white-space: nowrap;">
                                            {{ $ticket->category->parent->name }}
                                        </td>
                                        <td class="px-3 txt_cen">
                                            1
                                        </td>
                                        <td class="px-3 txt_cen" style="white-space: nowrap;">
                                            <img id="col_img" class="mr-10" src="{{ asset('assigment.png') }}"
                                                alt="mdo" width="20" height="20">



                                            <span>
                                                Api
                                            </span>
                                        </td>
                                        <td><span>
                                                OMS
                                            </span>
                                        </td>
                                        <td class="px-3 txt_cen" style="white-space: nowrap;">
                                            <span
                                                style="color: {{ match ($ticket->priority) {
                                                    'critical' => 'red',
                                                    'high' => 'orange',
                                                    'medium' => 'green',
                                                    default => 'gray',
                                                } }}">
                                                {{ $ticket->priority }}
                                            </span>
                                        </td>

                                        <td class="text-center" style="white-space: nowrap;">
                                            <span
                                                style="color: {{ match ($ticket->state) {
                                                    'open' => 'red',
                                                    'closed' => 'gray',
                                                    'in-progress' => 'yellow',
                                                    default => 'green',
                                                } }}">
                                                {{ $ticket->state }}
                                            </span>

                                        </td>
                                        <td class="px-3 txt_cen">
                                            {{ $ticket->country }}
                                        </td>
                                        <td class="text-center text-truncate">
                                            {{ $ticket->comment }}
                                        </td>
                                        <td class="text-center">
                                            {{ $ticket->created_at->format('M d, y h:i:A') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        th {
            /* font-weight: 400 !important; */
            color: #929e98 !important;
        }

        .t-id {
            padding: 5px;
            width: 87px !important;
            border-radius: 19px;
            background: #e0f4e9;
            display: inline-block;
            color: #6c6c6c;
        }
    </style>
</div>
