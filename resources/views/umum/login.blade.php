@extends('umum.temp_umum.index')

@section('content')
    {{-- Content --}}
    <div class="bg-gambar">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center ">
                <div class="col-xl-5 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0" style="background-color: #D9D9D9">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <div class="card mb-5">
                                                <h1 class="font-weight-bold">Login</h1>
                                            </div>
                                        </div>
                                        <form action="" method="POST">
                                            @csrf
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $item)
                                                            <li class="d-flex justify-content-start">{{ $item }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control form-control-user"
                                                    placeholder="Masukkan E-Mail Anda" value="{{ old('email') }}" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" placeholder="Masukkan Password Anda"
                                                    class="form-control form-control-user">
                                            </div>
                                            <center>
                                                <button class="btn btn-primary" type="submit" name="submit">Login</button>
                                            </center>
                                            <br>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <div class="fixed-bottom pt-2" style="background-color: #006F1F">
        <center>
            <p class="font-weight-bold text-light">&copy; 2023 KUD Sawit Jaya x Rizky Firmansyah x Romi Irawan.</p>
        </center>
    </div>
@endsection
