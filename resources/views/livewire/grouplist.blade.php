<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    {{-- gx dx --}}
    @include('livewire.savegroup')
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="update()" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" wire:model="group_id">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" class="form-control" wire:model="namex" id="exampleFormControlInput1"
                                placeholder="Enter Name">
                            @error('namex')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <img src="{{ asset('storage/' . $logox) }}" id="edit-imag-priview" height="200" width="200"
                            class="img-fluid">

                        <input type="file" required wire:model="logox" id="preview" accept="image/png,image/jpeg"
                            name="logox" />
                        <div class="form-group">
                            <label for="exampleFormControlInput2">description</label>
                            <input type="text" class="form-control" wire:model="descriptionx"
                                id="exampleFormControlInput1" placeholder="Enter Name">
                            @error('descriptionx')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-xs" type="submit">Submit</button>

                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" wire:click.prevent="update()" class="btn btn-primary"
                        data-dismiss="modal">Save changes</button>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- insert group record --}}

    @if (session()->has('success'))
        <h3 class="text-success text-center">{{ session('success') }}</h1>
    @endif
    <h1>group list </h1>
    <table style="width:50%;" border="1px">
        <tr>
            <th>rank</th>
            <th>group name</th>
            <th>logo</th>
            <th>description</th>
            <th>action</th>
        </tr>
        @foreach ($grouplist as $group)
            <tr>
                <td>{{ $group->group_id }}</td>
                <td>{{ $group->name }}</td>
                <td>
                    <img src="{{ asset('storage/' . $group->logo) }}" style="height: 50px;width: 80px;" alt="">
                </td>
                <td>{{ $group->description }}</td>
                <td>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-success mx-1" data-toggle="modal" data-target="#updateModal"
                            wire:click="edit({{ $group->group_id }})">edit</button>
                        <button wire:click="delete({{ $group->group_id }})" class="btn btn-danger mx-1">delete</button>
                    </div>

                </td>
            </tr>
        @endforeach
    </table>
    {{-- pagination --}}
    {{ $grouplist->links() }}
    <!-- font cdn jq -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            function readURL(input) {
                
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#edit-imag-priview').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#preview").change(function(ev) {
                ev.preventDefault();
                readURL(this);
            });
        });
    </script>

</div>
