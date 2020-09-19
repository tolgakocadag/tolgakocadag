@php

  echo "<?xml version='1.0' encoding='UTF-8'?>";
  echo "<urlset
  xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>";

  echo "<url>
  <loc>https://tolgakocadag.com/</loc>
  <lastmod>".date('Y')."-".date('m')."-".date('d')."T".date('H:i:s')."+00:00</lastmod>
  <priority>1.00</priority>
  </url>";

  for ($i=0; $i < count($slugs); $i++) {
    echo "<url>
    <loc>https://www.tolgakocadag.com/blog/".$slugs[$i]->postSlug."</loc>
    <lastmod>".date('Y')."-".date('m')."-".date('d')."T".date('H:i:s')."+00:00</lastmod>
    <priority>0.80</priority>
    </url>";
  }

  echo "</urlset>";

@endphp
