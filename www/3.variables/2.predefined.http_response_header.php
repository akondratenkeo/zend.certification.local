<?php

function get_contents() {
    file_get_contents("http://example.com");
    var_dump($http_response_header);
}

get_contents();
http_response_headers():
var_dump($php_errormsg);