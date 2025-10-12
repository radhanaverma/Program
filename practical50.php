
<?php
// Default theme
$theme = "light";

// If user clicks a button, update cookie
if (isset($_GET['theme'])) {
    $theme = $_GET['theme'];
    // Save preference for 1 day
    setcookie("siteTheme", $theme, time() + 86400, "/");
} elseif (isset($_COOKIE['siteTheme'])) {
    // Load from cookie if already set
    $theme = $_COOKIE['siteTheme'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Theme Preference Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        /* Light Mode */
        body.light {
            background-color: #ffffff;
            color: #000000;
        }
        /* Dark Mode */
        body.dark {
            background-color: #222222;
            color: #ffffff;
        }
        .btn {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        .light-btn {
            background-color: #f0f0f0;
            color: #000;
        }
        .dark-btn {
            background-color: #444;
            color: #fff;
        }
    </style>
</head>
<body class="<?php echo $theme; ?>">
    <h1>Welcome to My Website</h1>
    <p>Current Theme: <b><?php echo ucfirst($theme); ?> Mode</b></p>

    <!-- Buttons to switch themes -->
    <a href="?theme=light"><button class="btn light-btn">Light Mode</button></a>
    <a href="?theme=dark"><button class="btn dark-btn">Dark Mode</button></a>
</body>
</html>

