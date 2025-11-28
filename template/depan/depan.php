<?php include("data/depan/menu.php") ?>

<!DOCTYPE html>
<html>
<head>
    <title>PT. Citra Jelajah Informatika</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <?php include("style/depan/menu.php") ?>

    <?php include("style/depan/$folder/$files.php") ?>
    <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">   
    
</head>
<body>

<?php 
    include("menu.php");

    if($pages=="" or $files=="")
    {
        include("pages/depan/beranda/beranda.php");
    }
    elseif($pages!="" and $files!="")
    {
        if(file_exists("pages/depan/$pages/$files.php") and is_dir("pages/depan/$pages"))
        {
            include("data/depan/$pages/$files.php");
            include("pages/depan/$pages/$files.php");
        }
        else
        {
            include("pages/depan/error.php");
        }
    }

    include("footer.php");

?>




    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 900,
            once: true
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
