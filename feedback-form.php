<!DOCTYPE html>
<html lang="cs">
<head>
    <?php include 'head.php'; ?>
    <link href="css/style.css" rel="stylesheet" media="screen">
</head>
<body class="grid-container">
<?php include 'header.php'; ?>

<main class="grid-item-main">
    <section class="teaser">
        <h2>Formulář pro nahlašování problémů a zpětnou vazbu</h2>
    </section>
<form id="form-start" method="post" action="send-mail.php">
    <label for="first-name">Jméno:<p style="color: red; display: inline">*</p></label><br>
    <input type="text" size="60" maxlength="60"
           name="first-name" placeholder="John Doe (max 60 zn.)" required><br>

    <label for="email-adress">E-mail:<p style="color: red; display: inline">*</p></label><br>
    <input type="email" size="64" maxlength="64"
           name="email-adress" placeholder="example@example.com" required><br>

    <label for="problem-description">Vaše zpráva:<p style="color: red; display: inline">*</p></label><br>
    <textarea name="problem-description" cols="80" rows="10" maxlength="255"
              placeholder="Sem popište Váš problém... (max 255 zn.)" required></textarea><br>
    <input type="submit" value="Odeslat">
</form>

</main>
<?php include 'footer.php'; ?>
</body>
</html>