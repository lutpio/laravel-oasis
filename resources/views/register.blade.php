<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    {{-- font --}}
    <link rel="stylesheet" href="/css/style.css">
    @vite(['resources/js/app.js'])
</head>

<body>
    <main class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card border-0 shadow mt-5">
                        <!-- Logo-->
                        <div class="card-header py-4 text-center bg-dark">
                            <a href="/">
                                <span><img src="img/oasis-removebg-preview.png" height="200" alt="logo"></span>
                            </a>
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center m-auto">
                                <h4 class="text-black-50 text-center mt-0 fw-bold">Daftar akun</h4>

                            </div>

                            <form action="/register" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class=" form-label text-body-secondary">Nama</label>
                                    <input
                                        class="form-control  @error('name') is-invalid @enderror fw-light text-body-secondary"
                                        type="text" id="name" name="name" placeholder="nama">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label text-body-secondary">Email
                                        address</label>
                                    <input
                                        class="form-control @error('email') is-invalid @enderror fw-light text-body-secondary"
                                        type="email" id="emailaddress" name="email" placeholder="contoh@gmail.com">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="class" class="form-label text-body-secondary">Kelas</label>
                                    <input
                                        class="form-control @error('class') is-invalid @enderror fw-light text-body-secondary"
                                        type="text" id="class" name="class" placeholder="contoh: X-9, XII-IPS 3">
                                    @error('class')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label text-body-secondary">Password</label>
                                    <input type="password" name="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror  fw-light text-body-secondary"
                                        placeholder="••••••••">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label text-body-secondary">Konfirmasi
                                        Password</label>

                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="form-control  fw-light text-body-secondary" placeholder="••••••••">
                                </div>

                                <div class="mb-3 mt-5 text-center">
                                    <button class="btn btn-primary text-white" type="submit"> Register </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-body-secondary">Sudah punya akun? <a href="/"
                                    class="text-body-secondary ms-1"><b>Log In</b></a></p>
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </main>
</body>

</html>
