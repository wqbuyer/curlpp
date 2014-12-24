<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php 易用 http客户端扩展 </title>
    </head>
    <body>
        <?php
        $uri = 'http://www.baidu.com';
        $client = new curlpp();
        $client->set_head(array('User-Agent' => 'curlpp'));
        $client->set_cookie(array('key' => 'vlaue'));
        $client->set_auto_redirect(true);
        $client->set_timeout(3000);
        $data = array();
        $response = array();
        if ($client->get($uri, $data)):
            $response['head'] = $client->head();
            $response['cookie'] = $client->cookie();
            $response['status'] = $client->status();
            $response['content-size'] = $client->size();
            ?>
            <p><?php print_r($response); ?> </p>
            <p><?php echo $client->body(); ?>"></p>
        <?php else: ?>
            <p>http请求失败!</p>
        <?php endif; ?>
    </body>
</html>
