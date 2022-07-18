<!DOCTYPE html>
<html lang="en">
<?php
function get_client_ip()
{
  $ipaddress = '';
  if (isset($_SERVER['HTTP_CLIENT_IP']))
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
  else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
  else if (isset($_SERVER['HTTP_X_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
  else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
  else if (isset($_SERVER['HTTP_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_FORWARDED'];
  else if (isset($_SERVER['REMOTE_ADDR']))
    $ipaddress = $_SERVER['REMOTE_ADDR'];
  else
    $ipaddress = 'UNKNOWN';
  // var_dump("kien",$ipaddress);
  return $ipaddress;
}
get_client_ip()
?>
<?php
$ip = $ipaddress;
$access_key = '25638c1c5776d5e6d02e64fdedc6a699';

// Initialize CURL:
$ch = curl_init('https://api.ipapi.com/' . $ip . '?access_key=' . $access_key . '');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$api_result = json_decode($json, true);

// Output the "calling_code" object inside "location"
// foreach($api_result as &$value) {
//   var_dump($value);
// }
// var_dump($api_result);
// echo $api_result['location']['calling_code'];
?>

<?php
$lat = $api_result['latitude'];
$lng = $api_result['longitude'];
// $lat = '1.320666';
// $lng = '103.886993';
$access_key2 = '03c48dae07364cabb7f121d8c1519492';
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.opencagedata.com/geocode/v1/json?q=' . $lat . '+' . $lng . '&key=' . $access_key2 . '&no_annotations=1&language=en',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
$address_result = json_decode($response, true);
// echo "<pre>";
// var_dump($address_result['results'][0]['bounds']['northeast']);
// echo "</pre>";

?>
<?php
$curl = curl_init();
$access_key3 = '9ca7107d3e6d368bfd30943a02453749';
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.positionstack.com/v1/reverse?access_key=' . $access_key3 . '&query=' . $lat . ',' . $lng,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$res = curl_exec($curl);

curl_close($curl);
$results = json_decode($res, true);
// echo "<pre>";
// var_dump($results);
// echo "</pre>";
// echo $res;

?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.ico" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-839S1HBPR5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-839S1HBPR5');
  </script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4989876936770363" crossorigin="anonymous"></script>
</head>

<body>
  <header id="main-header position-absolute w-100">
    <nav class="navbar navbar-expand-xl navbar-dark sticky-header z-10 ">
      <div class="container d-flex align-items-center justify-content-lg-between position-relative">
        <div class="collapse navbar-collapse justify-content-center">
          <ul class="nav col-12 col-md-auto justify-content-center main-menu ">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="address.php" class="nav-link">Address</a>
            </li>
            <li class="nav-item">
              <a href="coordinates.php" class="nav-link">Coordinates</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>