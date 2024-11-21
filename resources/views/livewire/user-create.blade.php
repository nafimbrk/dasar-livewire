<div>
    <div class="card">
        <div class="card-header">Form</div>
        <div class="card-body">
            @include('my_components.alert_success')
            <form action="" wire:submit.prevent='store'>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="" id="" class="form-control @error('name') is-invalid @enderror" wire:model='name'>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Addreas</label>
                <input type="email" name="" id="" class="form-control @error('email') is-invalid @enderror" wire:model='email'>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="" id="" class="form-control @error('password') is-invalid @enderror" wire:model='password'>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- <button wire:click='store' class="btn btn-primary">Submit</button> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
