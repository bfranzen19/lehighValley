<!-- i'm on the server -->
<?php
// URL to scrape
  $url = "https://www.lvhn.org/our_services/care_services";

// scraper
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($curl, CURLOPT_HEADER, 0);
  $data = curl_exec($curl);

  curl_close($curl);

  // $data = str_replace('"string(64553) "', "", $data);
  // $data = str_replace('" == $0', "", $data);

// break scripts
  $data = strip_tags($data, "<a><strong><img><b><p><br><hr><h1><h2><h3><div><ul><li><section><article>");
    // strips all tags EXCEPT for tags listed to the right (second input). if it's removed from
    // the second input, it's going to be stripped.

  echo "loadData(".json_encode($data).")";

// z php
?>

