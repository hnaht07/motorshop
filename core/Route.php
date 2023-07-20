<?php
class Route{
    private $__keyRoute = null;
    function handleRoute($url){
        global $routes;
        unset($routes['default_controller']);
            
        $url = trim($url, '/');
        if(empty($url)){
            $url = '/';
        }
        $handleUrl = $url;
        if(!empty($routes)){
            foreach ($routes as $key => $value) {
                if(preg_match('~'.$key.'~is', $url)) {
                    $handleUrl = preg_replace('~' . $key . '~is', $value, $url);
                    $this->__keyRoute = $key;
                }
            }
        }
        return $handleUrl;
    }

    public function getUri() {
        return $this->__keyRoute;
    }
    static public function getFullUrl() {
        $uri = App::$app->getUrl();
        $url = _WEB_ROOT.$uri;
        echo $url;
        return $url;
    }
}


?>