<?php
require_once '../app/controllers/SubCon.php';

$controller = new SubCon();
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'show':
        $controller->show();
        break;
    default:
        $controller->index();
        break;
}
