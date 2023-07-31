


<div class="form-body">
    <form wire:submit.prevent="{{ $editing ? 'update' : 'store' }}">
        <div class="note note-success">اطلاعات ضروری - فارسی</div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">نام:</label>
                <input class="form-control form-control-solid" type="text" wire:model="name">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="family">نام خانوادگی:</label>
                <input class="form-control form-control-solid" type="text" wire:model="family">
                @error('family') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="gender">Gender:</label>
                <select class="form-control form-control-solid" wire:model="gender">
                    <option value="">Select center</option>
                    <option value="1">Boy</option>
                    <option value="2">Girl</option>
                </select>
                @error('center_id') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="center_id">Center:</label>
                <select class="form-control form-control-solid" wire:model="center_id">
                    <option value="">Select center</option>
                    @foreach($centers as $center)
                        <option value="{{ $center->id }}">{{ $center->title }}</option>
                    @endforeach
                </select>
                @error('center_id') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="father">نام پدر:</label>
                <input class="form-control form-control-solid" type="text" wire:model="father">
                @error('father') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="meli">Meli</label>
                <input class="form-control form-control-solid" type="text" wire:model="meli">
                @error('meli') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="mobile">mobile</label>
                <input class="form-control form-control-solid" type="text" wire:model="mobile">
                @error('mobile') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input class="form-control form-control-solid" type="text" wire:model="email">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="card">Card</label>
                <input class="form-control form-control-solid" type="text" wire:model="card">
                @error('card') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="city">City</label>
                <input class="form-control form-control-solid" type="text" wire:model="city">
                @error('city') <span class="error">{{ $message }}</span> @enderror
            </div>

        </div>

        <div class="note note-success">اطلاعات ضروری - انگلیسی</div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="name_en">Name En</label>
                <input class="form-control form-control-solid" type="text" wire:model="name_en">
                @error('name_en') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="family_en">Family En</label>
                <input class="form-control form-control-solid" type="text" wire:model="family_en">
                @error('family_en') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="father_en">Father En</label>
                <input class="form-control form-control-solid" type="text" wire:model="father_en">
                @error('father_en') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="passport">Passport</label>
                <input class="form-control form-control-solid" type="text" wire:model="passport">
                @error('passport') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="birth_en">Birth </label>
                <input class="form-control form-control-solid" type="text" wire:model="birth_en">
                @error('birth_en') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="note note-success">اطلاعات تکمیلی</div>
        <div class="row">
        <div class="form-group col-md-6">
            <label for="birth">Birth </label>
            <input class="form-control form-control-solid" type="text" wire:model="birth">
            @error('birth') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="form-group col-md-6">
            <label for="address">address </label>
            <input class="form-control form-control-solid" type="text" wire:model="address">
            @error('address') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="tel">tel </label>
            <input class="form-control form-control-solid" type="text" wire:model="tel">
            @error('tel') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="father_mobile">father_mobile </label>
            <input class="form-control form-control-solid" type="text" wire:model="father_mobile">
            @error('father_mobile') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="mother_mobile">mother_mobile </label>
            <input class="form-control form-control-solid" type="text" wire:model="mother_mobile">
            @error('mother_mobile') <span class="error">{{ $message }}</span> @enderror
        </div>

        </div>

        <div class="row">
                <div class="col-md-offset-5 col-md-4">
                    <button class="btn btn-primary" type="submit">{{ $editing ? 'Update' : 'Create' }} Student</button>
                    @if($editing)
                        <button class="btn btn-light-primary" type="button" wire:click="cancelEdit">Cancel</button>
                    @endif
                </div>
            </div>
    </form>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>
