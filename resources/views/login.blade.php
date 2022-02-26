<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../../img/logo.png" type="image/x-icon" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <title>Daepharmacy - {{ $title }}</title>
</head>

<body>

    <div class="container home-content overflow-hidden">
        <section class="main mb-5">

            <div class="d-flex justify-content-center align-items-center mt-5">

                <form class="bg-transparent p-5 pt-4 rounded-5 shadow-lg text-white mt-5" method="post" action="/login">
                    @csrf
                    <h3 class="text-white fw-bold text-center mb-4">Login</h3>

                    @if (session()->has('success'))
                    <div class="alert alert-primary alert-dismissible fade show fw-600 fs-7 " role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show fw-600 fs-7 " role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                        name="email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback fw-600 fs-7">
                        {{ $message }}
                    </div>
                    @enderror

                    <input type="password" class="form-control mt-3 @error('password') is-invalid @enderror"
                        placeholder="Password" name="password" value="{{ old('password') }}">
                    @error('password')
                    <div class="invalid-feedback fw-600 fs-7">
                        {{ $message }}
                    </div>
                    @enderror

                    <div id="emailHelp" class="form-text text-white fw-600 fs-7 pt-2">Click Here To <a
                            class="text-decoration-none" href="/register">Register</a>
                    </div>
                    <button type="submit"
                        class="btn btn-purple fw-bold px-3 py-2 mt-3 justify-content-end">Login</button>
                </form>
            </div>

        </section>
    </div>

</body>

@include('sweetalert::alert')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js"></script>
<script src="js/script.js"></script>
<script src="../js/script.js"></script>
<script src="../../js/script.js"></script>

</html>