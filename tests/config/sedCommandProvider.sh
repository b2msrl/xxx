#!/bin/bash
sed -i "s/'providers' => \[/'providers' => \[ Padosoft\\\\Xxx\\\\XxxServiceProvider::class,/g" ./config/app.php