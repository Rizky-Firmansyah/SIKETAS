@extends('umum.temp_umum.index')

@section('content')
    {{-- Content --}}
    <div class="bg-gambar">
        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center ">

                <div class="col-xl-5 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                        </div>
                                        <form class="user" action="" method="POST">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Masukkan E-Mail Anda</label>
                                                <input type="email" name="email" class="form-control form-control-user">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Masukkan Password Anda</label>
                                                <input type="password" name="password"
                                                    class="form-control form-control-user">
                                            </div>
                                            <center>
                                                <button class="btn btn-primary  btn-">Login</button>
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
    <div class="fixed-bottom bg-info pt-2">
        <center>
            <p style="font-weight: bolder">&copy; 2023 KUD Sawit Jaya x Rizky Firmansyah x Romi Irawan.</p>
        </center>
    </div>
@endsection
