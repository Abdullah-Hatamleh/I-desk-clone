<div>
    <div class="container">
        <div class="row mb-1">
            <div class="col-sm-12">
                <div class="card shadow p-3 rounded border border-0">
                    <div class="card-body row">
                        <div class="col-8">
                            <h5 class="card-title mb-3">
                                All Tickets
                                <span class="tw-text-grey-700 tw-text-sm text-secondary">
                                    X tickets
                                </span>

                                <p class="card-text text-secondary">Find all tickets on this page and its respective
                                    details.</p>

                            </h5>
                        </div>
                        <div class="col-4">
                            <div class=" d-flex justify-content-end">
                                <div class="center mt-10 mx-2" style="cursor: pointer">
                                    <img id="col_img" class="tw-p-[10px] b-white tw-rounded-[10px] shadow"
                                        src="{{ asset('Vector12.png') }}" alt="mdo" width="45" height="45">
                                </div>
                                <div class="mt-10">
                                    <button wire:click="$dispatch('navigate', {page : 'create'})"
                                        class="btn btn-success  w-px-200"
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
                    <div class="table-responsive mb-2 card">
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
                                <tr wire:click="goTo('ticket','11999')" style="opacity: 1;cursor: pointer">


                                    <td scope="row" class="checked text-center"
                                        style="background: white !important;">
                                        <span class="t-id" style="">
                                            #10000
                                        </span>

                                    </td>


                                    <td class="txt_cen px-3" style="white-space: nowrap;">
                                        <img id="col_img" class=" mr-10"
                                            src="https://development.extensyaidesk.com/tenancy/assets/img/user.png"
                                            alt="mdo" width="25" height="25">

                                        <span>
                                            Abdullah Hatamleh
                                        </span>
                                    </td>
                                    <td class="txt_cen px-3" style="white-space: nowrap;">
                                        I-Desk
                                    </td>
                                    <td class="txt_cen px-3">
                                        1
                                    </td>
                                    <td class="txt_cen px-3" style="white-space: nowrap;">
                                        <img id="col_img" class="mr-10"
                                            src="https://development.extensyaidesk.com/tenancy/assets/img/assigment.png"
                                            alt="mdo" width="20" height="20">



                                        <span>
                                            Api
                                        </span>
                                    </td>
                                    <td><span>
                                            OMS
                                        </span>
                                    </td>
                                    <td class=" txt_cen px-3" style="white-space: nowrap;">
                                        <span class="dot" style="background-color:orange"></span> <span
                                            style="color:orange">High</span>
                                    </td>

                                    <td class="text-center" style="white-space: nowrap;">
                                        <span class="dot" style="background-color:red"></span> <span
                                            style="color:red">New</span>

                                    </td>
                                    <td class="txt_cen px-3">

                                    </td>
                                    <td class="text-center">
                                        Dear Team,
                                        I sent...
                                    </td>
                                    <td class="text-center"> Oct 28 02:03:PM</td>
                                </tr>
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
