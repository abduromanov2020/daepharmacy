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
                <form class="bg-transparent p-5 pt-4 rounded-5 shadow-lg text-white mt-5" method="post"
                    action="/register">
                    @csrf
                    <h3 class="text-white fw-bold text-center mb-4">Register</h3>

                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                        placeholder="Username" name="username" value="{{ old('username') }}">
                    @error('username')
                    <div class="invalid-feedback fw-600 fs-7">
                        {{ $message }}
                    </div>
                    @enderror

                    <input type="email" class="form-control mt-3 @error('email') is-invalid @enderror"
                        placeholder="Email" name="email" value="{{ old('email') }}">
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

                    <button type="submit"
                        class="btn btn-purple fw-bold px-3 py-2 mt-3 justify-content-end">Register</button>
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