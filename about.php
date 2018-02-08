<?php
// URL to scrape
  $url = "https://www.lvhn.org/about_us";

// scraper
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

  $data = curl_exec($curl);

  if(curl_errno($curl)){ // check for execution errors
  	echo 'Scraper error: ' . curl_error($curl);
  	exit;
  }

  curl_close($curl);


  // str_replace("<div id='content-left'", "<div id='remove'", $data);

// break scripts
  $data = strip_tags($data, "<b><p><br><hr><div><h1><h3><ul><li><a><section><article><script>");
  $data= trim($data, "\/");
  var_dump($data);



  // function scrape_between($data, $start, $end){
  //   $data = stristr($data, $start); // Stripping all data from before $start
  //   $data = substr($data, strlen($start));  // Stripping $start
  //   $stop = stripos($data, $end);   // Getting the position of the $end of the data to scrape
  //   $data = substr($data, 0, $stop);    // Stripping all data from after and including the $end of the data to scrape
  //   return $data;   // Returning the scraped data from the function
  // }
  //
  // $scrapeResults = scrape_between($trimmed, "<h2>", "</h2>");

  echo "loadData(".json_encode($data).")";


  // Load Remote Page Content
  // $url = "https://www.lvhn.org/conditions_treatments/womens_health/pregnancy";
  // $ch = curl_init($url);
  // curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  // curl_setopt($ch, CURLOPT_HEADER, 0);
  // $data = curl_exec($ch);
  // curl_close($ch);
  //
  // // Fix Pictures
  // $data = str_replace('src="/','src="//www.northwell.com/',$data);
  //
  // // Fix Links
  // $data = str_replace('href="/','href="//www.northwell.com/',$data);
  //
  // // ID Script Tags
  // $data = str_replace('<script','<script class="ij-remove" ',$data);
  //
  // // ID Style Tags
  // $data = str_replace('<style','<style class="ij-remove" ',$data);
  //
  // // break scripts
  // $data = strip_tags($data, "<b><p><br><hr><div><h1><h2><h3><ul><li><a><section><article>");
  //
  // $trimmed= trim($data, "\/");
  // var_dump($trimmed);
  //
  // echo "loadData(".json_encode($trimmed).")";

?>
