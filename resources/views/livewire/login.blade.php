<div class="p-5">
    <h2 class="text-2xl">LOGIN</h2>

    <div class="p-5 max-w-20">
        <div class="mb-5">
            <label class="label-text" for="email">Email</label>
            <input class="input input-bordered" type="email" wire:model="email" id="email">
            @error('email') <span>{{ $message }}</span> @enderror
        </div>
        <div class="mb-5">
            <label class="label-text" for="password">Password</label>
            <input class="input input-bordered" type="password" wire:model="password" id="password">
            @error('password') <span>{{ $message }}</span> @enderror
        </div>
        <div>
            <button class="btn btn-primary">LOGIN</button>
        </div>
    </div>
</div>
