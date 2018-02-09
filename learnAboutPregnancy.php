<!-- i'm on the server -->
<?php
// URL to scrape
  $url = "https://www.lvhn.org/conditions_treatments/womens_health/pregnancy/learn_about_pregnancy";

// SCRAPER
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($curl, CURLOPT_HEADER, 0);
  $data = curl_exec($curl);

  curl_close($curl);

// CHANGE PROBLEMATIC STRINGS
  // $data = str_replace('" == $0', "", $data);

// BREAK SCRIPTS
// strips all tags EXCEPT for tags listed to the right (second input).
// if it's removed from the second input, it's going to be stripped.
  $data = strip_tags($data, "<a><span><strong><script><img><b><p><br><hr><h1><h2><h3><div><ul><li><section><article>");

// ECHO DATA TO JS SCRIPT IN HTML FILE
  echo "loadData(".json_encode($data).")";
?>
