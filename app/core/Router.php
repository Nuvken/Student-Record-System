<?php
class Router {
    public function handleRequest() {

        $url = $_GET['url'] ?? 'home';

        if ($url === 'dashboard') {
            require '../app/view/student/dashboard.php';
        } else {
            http_response_code(404);
        }
    }
}
?>