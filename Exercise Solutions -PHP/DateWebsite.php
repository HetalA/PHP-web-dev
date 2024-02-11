<?php
  //current date show
  $current_time = date('Y-m-d H:i:s');
  echo "Current time : ". $current_time;

  //populate with timezone
  $timezones = DateTimeZone::listIdentifiers();
  echo '<select name="timezone">';
  foreach ($timezones as $timezone) {
    echo '<option value="' . $timezone . '">' . $timezone . '</option>';
  }
  echo '</select>';

  //display time from requested timezone when selected
  // date_default_timezone_set("Australia/Melbourne");
  $selected_timezone = $_POST['timezone'];
  $current_time = new DateTime('now', new DateTimeZone($selected_timezone));
  echo "Current time : ". $current_time;
