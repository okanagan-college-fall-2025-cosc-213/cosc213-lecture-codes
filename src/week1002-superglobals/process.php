<?php
// === Enable full error visibility ===
error_reporting(E_ALL);
ini_set('display_errors', 1);

// === Dual Debug Helper ===
function debug($message, $data = null) {
    $timestamp = date('H:i:s');
    $output = "$timestamp [DEBUG] $message";
    if ($data !== null) {
        $output .= ' ' . print_r($data, true);
    }

    // 1 Log to terminal
    error_log($output);

    // 2 Display in browser
    echo "<pre style='color:#006400;'>$output</pre>";
}

// === Script start ===
debug("Request received", $_SERVER["REQUEST_METHOD"]);

// Collect request data
$name = $_REQUEST["uname"] ?? "(none)";
$pass = $_REQUEST["pass"] ?? "(none)";

// Log form data
debug("Form data received", ["uname" => $name, "pass" => $pass]);

// Example logic
if ($name === "(none)" || $pass === "(none)") {
    debug("Missing one or more fields");
} else {
    debug("Processing request for user: $name");
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Debugging Superglobals</title>
</head>
<body>
  <h2>Superglobal Debugger Output</h2>
  <p>All request data has been logged below and to your terminal.</p>

  <h3>$_GET</h3>
  <pre><?php print_r($_GET); ?></pre>

  <h3>$_POST</h3>
  <pre><?php print_r($_POST); ?></pre>

  <h3>$_SERVER (partial)</h3>
  <pre><?php echo htmlspecialchars($_SERVER["REQUEST_METHOD"]); ?></pre>
</body>
</html>