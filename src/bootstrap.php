<?php

$app = [];

$app['config'] = require 'config.php';

require 'src/Router.php';
require 'src/Request.php';
require 'src/database/Connection.php';
require 'src/database/QueryBuilder.php';
require 'src/Layout.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']));
