@php

  echo "<?xml version='1.0' encoding='UTF-8'?>";
  echo "<urlset
  xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>";

  echo "<url>
  <loc>https://tolgakocadag.com/</loc>
  <lastmod>".date('Y')."-".date('m')."-".date('d')."T".date('H:i:s')."+00:00</lastmod>
  </url>";

  for ($i=0; $i < count($slugs); $i++) {
    echo "<url>
    <loc>https://www.tolgakocadag.com/blog/".$slugs[$i]->postSlug."</loc>
    <lastmod>".str_replace(" ","T",$slugs[$i]->created_at)."+00:00</lastmod>
    </url>";
  }

  echo "</urlset>";

@endphp
