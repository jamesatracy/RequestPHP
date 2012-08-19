<?php
// Example usages of Request

require("Request.class.php");

$request = new Request();

echo "base() ".$request->base();
echo "<br/>";
echo "url() ".$request->url();
echo "<br/>";
echo "path() ".$request->path();
echo "<br/>";
echo "here() ".$request->here();
echo "<br/>";
echo "queryString() ".$request->queryString();
echo "<br/>";
echo "ipaddress() ".$request->ipaddress();
echo "<br/>";
echo "link('/about/') ".$request->link("/about/");
echo "<br/>";
echo "is('get') ".$request->is('get');
echo "<br/>";
echo "is('post') ".$request->is('post');
echo "<br/>";
echo "is('put') ".$request->is('put');
echo "<br/>";
echo "is('ajax') ".$request->is('ajax');
echo "<br/>";
echo "is('ssl') ".$request->is('ssl');
echo "<br/>";
echo "get() ".var_dump($request->get());
echo "<br/>";
echo "post() ".var_dump($request->post());
echo "<br/>";
echo "files() ".var_dump($request->files());
echo "<br/>";
?>