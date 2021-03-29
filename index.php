<?php
    use App\controller\ControllerMobile;
    use App\controller\ControllerLogin;
    use App\controller\CategoryController;
    $load = require __DIR__. "/vendor/autoload.php";

    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
    $bill = new ControllerMobile();
    $login = new ControllerLogin();
    $category = new CategoryController();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Mobile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
</head>
<body>

<?php

    switch ($page) {
        case 'home':
            $bill->index();
            break;

        case 'list':
            $bill->More();
            
            break;
        case 'add':
            $bill->add();
            break;

        case 'update':
           $bill->update();
            break;

        case 'delete':
            $id = $_REQUEST['id'];
            $bill->delete($id);
            break;

        case 'registration':
            $login->addLogin();
            break;

        case 'login':
            $login->login();
            break;

        case 'search':
            $bill->search();
            break;

        case 'cart':
            include 'src/view/Cart.php';
            break;

        case 'category':
            $category->getCreate();
            break;

        default:
          $login->login();

    }

?>

</body>
</html>
