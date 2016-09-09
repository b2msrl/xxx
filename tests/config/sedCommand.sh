#!/bin/bash
sed -i 's/"psr-4": {/"psr-4": { "Padosoft\\\\Xxx\\\\Test\\\\": ".\/vendor\/padosoft\/xxx\/tests\/",/g' ./composer.json