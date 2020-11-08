<div class="container">    
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                <div class="card-body">
                        <h1 class="text-center">Login</h1>
                        @if(session()->has('error')) <span class="text-danger">{{session('error')}}</span> @endif
                        <form wire:submit.prevent="submit">
                        <div class="form-group">
                        <label for="email">Email</label>
                            <input wire:model="form.email" type="text" class="form-control" placeholder="Input your valid email">
                            @error('form.email') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                        <label for="email">Password</label>
                            <input wire:model="form.password" type="password" class="form-control" placeholder="Input your valid password">
                            @error('form.password') <span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary">Login</button>
                        </div>
                        <div>
                            <a href="/register">Register</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>    
</div>
