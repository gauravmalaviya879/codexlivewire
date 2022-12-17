<div>
    {{-- In work, do what you enjoy. --}}



    <div class="d-flex justify-content-center my-5">
        <div class="card p-4" style="width: 25rem">
            <form wire:submit.prevent="saveGroup" enctype="multipart/form-data">
                <h4>groupsave</h1>
                    <div class="form-group">
                        <label for="name">group name</label><br>
                        <input type="text" name="name" class="form-control" id="name" wire:model="name">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="logo">group logo</label>
                        @if ($logo)
                            Photo Preview:
                            <div>
                                <img src="{{ $logo->temporaryUrl() }}" height="200" width="200" class="img-fluid">
                            </div>
                        @endif
                        <input type="file" required wire:model="logo" accept="image/png,image/jpeg" name="logo" />
                        @error('logo')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">group description</label>
                        <input type="text" name="description" class="form-control" id="description"
                            wire:model="description">
                        @error('description')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">submit</button><br><br>
            </form>
        </div>

    </div>





</div>
