<?php

$url = "https://www.inumet.gub.uy/tiempo/estado-actual";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$html = curl_exec($ch);

echo "Código HTTP: " . curl_getinfo($ch, CURLINFO_HTTP_CODE) . "<br>";
echo "Tamaño recibido: " . strlen($html) . " bytes<br>";
echo "Error: " . curl_error($ch) . "<br><br>";

echo "<pre>";
echo htmlspecialchars($html);
echo "</pre>";

curl_close($ch);

?>