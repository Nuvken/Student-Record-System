<?php
class Router {
    public function handleRequest() {

        $url = $_GET['url'] ?? 'home';

        if ($url === 'dashboard') {
            require '../app/view/dashboard.php';
        } elseif ($url === 'landingpage') {
            require '../app/view/landingpage.php';
        } else {
            http_response_code(404);
        }
    }
}
?>