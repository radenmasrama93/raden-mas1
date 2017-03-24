<?php
  //https://www.wunderground.com/weather/api/d/docs?d=data/almanac
  $json_string = file_get_contents("http://api.wunderground.com/api/39e449f654a8416d/almanac/q/ID/Semarang.json");
  $parsed_json = json_decode($json_string);
  $negara = $parsed_json->response->results[0]->country_name;
  $kota = $parsed_json->response->results[0]->city;
  $temp_f = $parsed_json->response->results[0]->temp;
  echo "Nama Negara : $negara<br>";
  echo "Nama Kota : $kota<br>";
  echo "Suhu Udara : $temp_f"
?>