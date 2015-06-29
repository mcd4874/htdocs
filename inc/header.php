<html>
<head>
    <title><?php echo $pageTittle; ?></title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>

<div class="header">

    <div class="wrapper">

        <h1 class="branding-title"><a href="./">Shirts For Minh Store</a></h1>

        <ul class="nav">
            <li class="shirts "><a href="shirts.php">Shirts</a></li>
            <li class="contact <?php if($section=="contact"){echo "on";} ?>"><a href="contact.php">Contact</a></li>
            <li class="Company_Information <?php if($section=="information"){echo "on";} ?>"><a href="company_Information.php">Company Information</a></li>
            <li class="cart"><a href="#">Shopping Cart</a></li>
        </ul>

    </div>

</div>

<div id="content">