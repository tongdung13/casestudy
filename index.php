<?php
    use App\controller\ControllerMobile;
    use App\controller\ControllerLogin;
    $load = require __DIR__. "/vendor/autoload.php";

    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
    $bill = new ControllerMobile();
    $login = new ControllerLogin();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Mobile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
            $bill->delete();
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

        default:
          $login->login();

    }

?>

</body>
</html>
