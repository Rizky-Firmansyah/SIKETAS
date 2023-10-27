@extends('umum.temp_umum.index')

@section('content')
    {{-- Content --}}
    <div style="background-image: url('{{ asset('assets/images/kud.jpeg') }}')">
        <div class="container">



            <section class="ftco-section">
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4">
                            <div class="login-wrap p-0">
                                <h3 class="mb-4 mt-5 text-center">Silahkan Login Jika Memiliki Akun</h3>
                                <form action="" class="signin-form" method="POST">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $item)
                                                    <li class="d-flex justify-content-start">{{ $item }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="E-Mail" name="email"
                                            value="{{ old('email') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <input id="password-field" type="password" name="password" class="form-control"
                                            placeholder="Password" required>
                                        <span toggle="#password-field"
                                            class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit"
                                            class="form-control btn btn-primary submit px-3">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </div>
    </div>

    {{-- Footer --}}
    <div class="fixed-bottom bg-info pt-2">
        <center>
            <p style="font-weight: bolder">&copy; 2023 KUD Sawit Jaya x Rizky Firmansyah x Romi Irawan.</p>
        </center>
    </div>
@endsection
