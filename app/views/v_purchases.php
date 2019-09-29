<?php

if (!empty($data["items"])) {
  foreach($data["items"] as $item) {
    print_r($item);
    echo "<hr />";
  }
} else {
  echo "<p>no purchases yet</p>";
}
