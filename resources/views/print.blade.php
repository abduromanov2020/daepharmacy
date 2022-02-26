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
    <title>Daepharmacy</title>
</head>

<body onload="window.print();">

    <div class="container home-content overflow-hidden">
        <section class="main">

            <h2 class="text-white fw-bolder text-center py-3 mt-3">Recapitulation</h2>

            <div class="table-responsive">
                <table class="table table-borderless table-rounded">
                    <colgroup>
                        <col span="1" style="width: 20%;">
                        <col span="1" style="width: 20%;">
                        <col span="1" style="width: 10%;">
                        <col span="1" style="width: 15%;">
                        <col span="1" style="width: 15%;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Transaction</th>
                            <th>Item</th>
                            <th>Total Item</th>
                            <th>Total Price</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($recap as $recap): ?>
                        <tr>
                            <td>{{ $recap->number }}</td>
                            <td>{{ $recap->item }}</td>
                            <td>{{ $recap->total_item }}</td>
                            <td>{{ "Rp " . number_format($recap->total_price,2,',','.') }}</td>
                            <td>{{ auth()->user()->username }}</td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>

        </section>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js"></script>
<script src="js/script.js"></script>
<script src="../js/script.js"></script>
<script src="../../js/script.js"></script>

</html>