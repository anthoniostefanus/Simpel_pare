@extends('layouts.app')

@extends('layouts.header1')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/email.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                <div class="offset-md-4 ">
                  <img class= "pare2" src= "{{ ('/img/pare2.png') }}">
                </div>
                </br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="offset-md-4 ">
                                <h5 class="txt-email" >Temukan Akun Anda </h5>
                            </br>
                             </div>
                        <label for="email" class="col-md-3 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </br>
                        </br>
                        </br>
                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-4">
                                <button type="submit" style="text-decoration:none;" class="btn btn-link">
                                    <p class="txt-btn"> SELANJUTNYA </p>
                                </button>
                                </br>
                        </br>
                        </br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
