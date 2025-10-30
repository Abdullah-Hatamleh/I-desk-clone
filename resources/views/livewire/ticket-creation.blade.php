<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="container">
        <div class="mb-4 row">
            <div class="col-sm-12">


                <div class="p-3 border border-0 rounded shadow card">
                    <div class="card-body row">
                        <div class="col-8">
                            <h5 class="mb-3 card-title">
                                Create Ticket Form

                                <p class="card-text text-secondary">Find all tickets on this page and its respective
                                    details.</p>

                            </h5>
                        </div>
                        <div class="col-4">
                            <div class=" d-flex justify-content-end">
                                <div class="mt-10">
                                    <button wire:click="$dispatch('navigate', {page : 'dashboard'})"
                                        class="btn btn-success w-px-200"
                                        style="float: right; display: flex; align-items: center; justify-content: center; height: 44px; background: #00a34e;">
                                        <span style="text-align: center;">Table View</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="alerts_block">

                    {{-- giving info in 2 places? --}}
                    {{-- @if ($errors->any())
                        <div class="mt-2 alert alert-danger">
                            <strong>There were some problems with your submission:</strong>
                            <ul class="mt-2 mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>

        </div>
        <div class="mb-3 row align-items-center">
            <div class=" offset-md-1 col-md-10 col-12">
                <div class="border border-0 rounded shadow card">
                    <h5 class="py-4 text-center text-white rounded card-header rounded-bottom"
                        style="background: linear-gradient(to right, #02a34e , #abc959);"> Create New Ticket</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h5>General Information</h5>
                                <hr style="color: #00a34e" />
                            </div>
                            <div class="mt-2 col-4 text-secondary">
                                <label for="selectPrio" class="form-label">Priority *</label>
                                <select name="priority" wire:model='priority' class="form-select" id="selectPrio">
                                    <option disabled selected value="">---</option>
                                    <option value="critical">critical</option>
                                    <option value="high">High</option>
                                    <option value="medium">medium</option>
                                    <option value="low">low</option>
                                </select>
                                @error('priority')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-2 col-4 text-secondary">
                                <label for="country" class="form-label">Country *</label>
                                <input type="text" wire:model='country' class="form-control form-input"
                                    id="country">
                                @error('Country')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-5 mb-2 col-12">
                                <h5>Ticket Categories</h5>
                                <hr style="color: #00a34e" />
                            </div>

                            <div class="col-4 text-secondary">
                                <label for="FirstCat" class="form-label">First Category *</label>
                                <select name="" id="FirstCat" class="form-select"
                                    wire:change='firstCategoryChanged($event.target.value)'>
                                    <option selected value="">---</option>
                                    @foreach ($firstcats as $cat)
                                        <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('thirdCategory')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-4 text-secondary">
                                <label for="SecondCat" class="form-label">Second Category *</label>
                                <select name="" id="SecondCat" class="form-select" wire:model="secondCategory"
                                    wire:change='secondCategoryChanged($event.target.value)'>
                                    <option selected value="">---</option>
                                    @foreach ($secondCats as $cat)
                                        <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4 text-secondary">
                                <label for="thirdCat" class="form-label">Third Category *</label>
                                <select name="" id="thirdCat" class="form-select" wire:model='thirdCategory'>
                                    <option selected>---</option>
                                    @foreach ($thirdCats as $cat)
                                        <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-5 mb-2 col-12">
                                <h5>Ticket Info</h5>
                                <hr style="color: #00a34e" />
                            </div>
                            <div class="col-4 text-secondary">
                                <label for="customerName" class="form-label">Customer Name</label>
                                <input wire:model='customerName' type="text" id="customerName"
                                    class="form-control form-input">
                                @error('customerName')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-4 text-secondary">
                                <label for="customerNumber" class="form-label">Customer Number</label>
                                <input wire:model='customerNumber' type="text" id="customerNumber"
                                    class="form-control form-input" placeholder="+962 799 123456">
                                @error('customerNumber')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-4 text-secondary">
                                <label for="CustomerEmail" class="form-label">Customer Email</label>
                                <input wire:model='customerEmail' type="email" id="CustomerEmail"
                                    class="form-control form-input">
                                @error('customerEmail')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-4 col-4 text-secondary">
                                <label for="site" class="form-label">Site *</label>
                                <select name="" id="site" wire:model='site' class="form-select">
                                    <option value="" disabled selected>---</option>
                                    <option value="irbid">Irbid</option>
                                    <option value="Madina">Madina st.</option>
                                    <option value="University">University st.</option>
                                </select>
                                @error('site')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-4 col-4 text-secondary">
                                <label for="" class="form-label">Phone/Extension number *</label>
                                <input wire:model='phone' type="number" class="form-control form-input">
                                @error('phone')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-4 col-4 text-secondary">
                                <label for="" class="form-label">Customer Id *</label>
                                <input wire:model='customerId' type="text" class=" form-control form-input">
                                @error('customerId')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-4 col-4 text-secondary">
                                <label for="" class="form-label">Anydesk Id *</label>
                                <input wire:model='anydeskId' type="text" class=" form-control form-input">
                                @error('anydeskId')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-4 col-8 text-secondary">
                                {{-- Datalist X mutliselect --}}
                                <label for="tagInput" class="form-label">Issues *</label>
                                <div wire:ignore class="tags-input" id="multiSelect">
                                    <input list="issues" id="tagInput" placeholder="Type to search...">
                                    <datalist id="issues">
                                        <option value="Glitches"></option>
                                        <option value="Inaccesable content"></option>
                                        <option value="Account"></option>
                                        <option value="Hardware"></option>
                                        <option value="Softwre"></option>
                                    </datalist>
                                </div>
                                @error('issues')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                                <input type="hidden" wire:model='issues' id="issuesInput">
                            </div>
                            <div class="mt-5 mb-2 col-12">
                                <h5>Attachments</h5>
                                <hr style="color: #00a34e" />
                            </div>
                            <div class="mt-3 mb-3 col-12 input-group">
                                <input wire:model='attachment' type="file" name="" class="form-control"
                                    id="">
                                @error('attachment')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-5 mb-3 col-12">
                                <h5>Comment</h5>
                                <hr style="color: #00a34e">
                            </div>
                            <div class="col-12">
                                <textarea wire:model='comment' name="" class="form-control tw-h-28" id=""
                                    placeholder="leave a comment here"></textarea>
                                @error('comment')
                                    <span class="text-danger small">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-4 col-12 text-secondary">
                                <button wire:click='createTicket()' class="btn btn-success"
                                    onclick="window.scrollTo(0,0)">Test</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .tags-input {
            display: flex;
            flex-wrap: wrap;
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 4px;
        }

        .tags-input input {
            border: none;
            outline: none;
            flex: 1;
            padding: 4px;
        }

        .tag {
            background: #3d4d46;
            color: white;
            border-radius: 3px;
            padding: 3px 7px;
            margin: 2px;
            display: flex;
            align-items: center;
        }

        .tag button {
            background: none;
            border: none;
            color: white;
            font-weight: bold;
            margin-left: 5px;
            cursor: pointer;
        }
    </style>

    @script
        <script>
            console.log("running scripts");

            const container = document.getElementById('multiSelect');
            const input = document.getElementById('tagInput');
            const liveWireInput = document.getElementById('issuesInput');
            const selected = new Set();

            input.addEventListener('change', () => {
                const value = input.value.trim();
                if (value && !selected.has(value)) {

                    selected.add(value);
                    const tag = document.createElement('span');
                    tag.className = 'tag';
                    tag.textContent = value;
                    // input.value = '';
                    const removeBtn = document.createElement('button');

                    removeBtn.textContent = '×';
                    removeBtn.onclick = () => {
                        container.removeChild(tag);
                        selected.delete(value);
                        updateLiveWire();
                    };

                    tag.appendChild(removeBtn);
                    container.insertBefore(tag, input);

                    updateLiveWire();
                }
                input.value = '';
            });

            function updateLiveWire() {
                liveWireInput.value = JSON.stringify([...selected]);
                @this.set('issues', [...selected]);
            }
            console.log("running scripts");
        </script>
    @endscript
</div>
