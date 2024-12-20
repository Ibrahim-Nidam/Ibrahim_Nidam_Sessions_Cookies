<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie('language', $_POST['language'], time() + 86400, "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$lang = $_COOKIE['language'] ?? 'English';

echo "<p>Your preferred language is: " . htmlspecialchars($lang) . "</p>";

?>

<form method="POST" action="">
    <label for="language">Choose your language:</label>
    <select name="language" id="language">
        <option value="English" <?= $lang == 'English' ? 'selected' : '' ?>>English</option>
        <option value="French" <?= $lang == 'French' ? 'selected' : '' ?>>French</option>
        <option value="Spanish" <?= $lang == 'Spanish' ? 'selected' : '' ?>>Spanish</option>
    </select>
    <input type="submit" value="Save Preference">
</form>
<?php echo "<br><a href='index.php'>back home</a>"; ?>
