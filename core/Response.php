<?php

namespace app\core;

public function setStatusCode(int $code){
    http_response_code($code);
}

?>