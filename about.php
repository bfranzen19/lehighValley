<?php

// Load Remote Page Content
$url = "https://www.northwell.edu/find-care/locations/department-obstetrics-lenox-hill-hospital";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch);
curl_close($ch);

// Fix Pictures
$data = str_replace('src="/','src="//www.northwell.com/',$data);

// Fix Links
$data = str_replace('href="/','href="//www.northwell.com/',$data);

// ID Script Tags
$data = str_replace('<script','<script class="ij-remove" ',$data);

// ID Style Tags
$data = str_replace('<style','<style class="ij-remove" ',$data);

// break scripts
$data = strip_tags($data, "<b><p><br><hr><div><h1><h2><h3><ul><li><a><section>");

echo "loadData(".json_encode($data).")";

?>
