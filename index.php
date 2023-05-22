<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo isset($title) ?$_GET['title']:'Trang Chủ';?></title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

     <link rel="stylesheet" href="./public/style/IndexCss.css"/>

</head>
<body>
     
  <header> <?php include __DIR__ . './Layout/Header.php';?></header>
     <main> <?php  
          $page=isset($_GET['page']) ?$_GET['page']:"SigNin";
           switch($page){


               case 'PageVideo':
                    include __DIR__ . '/page/Videos/PageVideo.php';
                    break;




               case 'Hepl':
                    
                    include __DIR__ . './page/Hepl/Hepl.php';
                    break;
               
               case'dashboard':
                    include __DIR__ . './page/dashboard/dashboard.php';
                    break;
               case 'Pageintroduce':
                    include __DIR__ . './page/introduce/Pageintroduce.php';
                    break;
               case'ViewProduct':
                    include __DIR__ . './page/ViewProduct/ViewProduct.php';
                    break;
               case'Product':
                    include __DIR__ . './page/Product/Product.php';
                    break;
               case'Profile':
                    include __DIR__ . './page/Profile/Profile.php';
                    break;
               case'Register':
                    include __DIR__ . './page/ACConut/Register.php';
                    break;
               case'Home':
               include __DIR__ . './page/Home.php';
               break;

               default:
               include __DIR__ . './page/ACConut/SigNin.php';
               break;
           }
     ?></main>
     <footer><?php include __DIR__ . './Layout/footer.php'; ?></footer>

</body>
</html>