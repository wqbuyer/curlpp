<?php

/**
 * Description of curlpp
 * 万千海淘开发部(http://www.wqbuyer.com)
 * @author root.wqbuyer@gmail.com
 */
class curlpp {

    public function set_proxy($host, $port);

    public function set_proxy_credentials($username, $password);

    public function set_auto_redirect($tf);

    public function set_timeout($time);
    
    public function set_head($head);
    
    public function set_cookie($cookie);

    public function get($uri, $data);

    public function post($uri, $data);

    public function head();

    public function body();

    public function status();

    public function cookie();

    public function size();
}
