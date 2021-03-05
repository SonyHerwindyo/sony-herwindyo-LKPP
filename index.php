<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Ujian LKPP!</title>
</head>

<?php

$apikey = 'f03455a5df94ae6f989a821d216f26490d624be024735e13fe2908a2fe7432d6';
// $channelId = 'UC-lHJZR3Gqxm24_Vd_AJ5Yw';
function get_CURL($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);
}

$result = get_CURL('https://api.binderbyte.com/v1/track?api_key=f03455a5df94ae6f989a821d216f26490d624be024735e13fe2908a2fe7432d6&courier=jne&awb=8825112045716759');

$history = $result['data']['history'][7]['date'];
$awb = $result['data']['summary']['awb'];
$courier = $result['data']['summary']['courier'];
$tanggal_kirim = $result['data']['summary']['date'];
$pengirim = $result['data']['detail']['shipper'];
$origin = $result['data']['detail']['origin'];

$historyDate7 = $result['data']['history'][7]['date'];
$history2Desc7 = $result['data']['history'][7]['desc'];

$historyDate6 = $result['data']['history'][6]['date'];
$history2Desc6 = $result['data']['history'][6]['desc'];
$historyDate5 = $result['data']['history'][5]['date'];
$history2Desc5 = $result['data']['history'][5]['desc'];
$historyDate4 = $result['data']['history'][4]['date'];
$history2Desc4 = $result['data']['history'][4]['desc'];
$historyDate3 = $result['data']['history'][3]['date'];
$history2Desc3 = $result['data']['history'][3]['desc'];
$historyDate2 = $result['data']['history'][2]['date'];
$history2Desc2 = $result['data']['history'][2]['desc'];
$historyDate1 = $result['data']['history'][1]['date'];
$history2Desc1 = $result['data']['history'][1]['desc'];
?>

<body>
    <div class="container">
        <h4>CEK PAKET</h4>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Input resi anda ...">
            </div>
            <div class="col">
                <button class="btn btn-primary">Cari</button>
            </div>
        </div>

        <div class="form-check">
            <div class="row">
                <div class="col">
                    <input id="JNE" name="kurir" id="kurir" class="form-check-input" type="radio">
                    <label for="JNE">JNE</label>
                </div>
                <div class="col">
                    <input id="TIKI" name="kurir" id="kurir" class="form-check-input" type="radio">
                    <label for="TIKI">TIKI</label>
                </div>
                <div class="col">
                    <input id="POS" name="kurir" id="kurir" class="form-check-input" type="radio">
                    <label for="POS">POS</label>
                </div>
                <div class="col">
                    <input id="SiCepat" name="kurir" id="kurir" class="form-check-input" type="radio">
                    <label for="SiCepat">SiCepat</label>
                </div>
                <div class="col">
                    <input id="AnterAja" name="kurir" id="kurir" class="form-check-input" type="radio">
                    <label for="AnterAja">AnterAja</label>
                </div>
                <div class="col">
                    <input id="Ninja" name="kurir" id="kurir" class="form-check-input" type="radio">
                    <label for="Ninja">Ninja</label>
                </div>
                <div class="col">
                    <input id="JNT" name="kurir" id="kurir" class="form-check-input" type="radio">
                    <label for="JNT">JNT</label>
                </div>
            </div>
        </div>
        <p><?php echo $history ?></p>
        <hr>
        <div class="row">
            <div class="col">

                <b>
                    <p>Nomor resi</p>
                </b>
                <p><?php echo $awb ?></p>

                <p><?php echo $courier ?></p>
            </div>
            <div class="col">
                <b>
                    <p>Tanggal pengiriman</p>
                </b>
                <p><?php echo $tanggal_kirim ?></p>
            </div>
            <div class="col">
                <b>
                    <p>Pengirim</p>
                </b>
                <p><?php echo $pengirim ?></p>
                <p><?php echo $origin ?></p>
            </div>
            <div class="col">
                <b>
                    <p>Penerima</p>
                </b>
            </div>
        </div>
        <hr>
        <b>
            <p>Detil pengiriman</p>
        </b>
        <div class="row">
            <div class="col">
                <b>
                    <p>tanggal/waktu</p>

                </b>
                <p><?php echo $historyDate7 ?></p>
                <p><?php echo $historyDate6 ?></p>
                <p><?php echo $historyDate5 ?></p>
                <p><?php echo $historyDate4 ?></p>
                <p><?php echo $historyDate3 ?></p>
                <p><?php echo $historyDate2 ?></p>
                <p><?php echo $historyDate1 ?></p>
            </div>
            <div class="col">
                <b>
                    <p>Deskripsi</p>

                </b>
                <p><?php echo $history2Desc7 ?></p>
                <p><?php echo $history2Desc6 ?></p>
                <p><?php echo $history2Desc5 ?></p>
                <p><?php echo $history2Desc4 ?></p>
                <p><?php echo $history2Desc3 ?></p>
                <p><?php echo $history2Desc2 ?></p>
                <p><?php echo $history2Desc1 ?></p>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </div>

</body>

</html>