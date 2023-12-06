@extends('master')
@section("content")


<div class="container mt-4">
    <div class="row mt-4">
        <div class="col-sm-4 col-sm-offset-4">
<form action="/login" method="POST">

    @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="text"
                        name="email"
                        id=""
                        class="form-control"
                        placeholder="Enter your email here"
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input
                        type="text"
                        name="password"
                        id=""
                        class="form-control"
                        placeholder="Enter your password here"
                    />
                </div>
                <button type="submit" class="btn btn-dark">Login</button>

</form>
            </div>

    </div>

    </div>


@endsection
