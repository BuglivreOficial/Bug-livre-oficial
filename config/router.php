<?php
//
class Router {
    public function post($url) {
        if ($_SERVER['REQUEST_URI'] == '$url' && $_SERVER['REQUEST_METHOD'] == 'POST') {
            return 'hhhhhb';
        } else {
            return 'requisicao invalida';
        }
    }
}