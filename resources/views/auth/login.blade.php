@extends('layouts.auth')

@section('auth')
    <div style="width: 310px" class="card bg-light">
        <div class="card-header">
            <h5 class="text-center fw-bold">Info<span class="text-primary">Gawian</span>.</h5>
        </div>
        <div class="px-2 py-2 card-body">
            <form action="" method="post">
                @csrf
                @method('post')
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <p class="text-center">don't have an account? <a href="/registration" class="text-decoration-none">registration</a></p>
        </div>
    </div>
@endsection
