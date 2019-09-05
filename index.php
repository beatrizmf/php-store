<?php

require_once dirname(__FILE__) . "/app/config/constants.php";

require_once PATH_APP . "/config/routes.php";
require_once PATH_APP . "/App.php";

App::getInstance($routes);
