#!/bin/bash

echo "MySql username:"
read nombre

echo "MySql password:"
read password

echo "DROP DATABASE matajuegos" | mysql -u${nombre} -p${password}
echo "CREATE DATABASE matajuegos CHARACTER SET utf8 COLLATE utf8_general_ci" | mysql -u${nombre} -p${password}

mysql -u${nombre} -p${password} matajuegos  < matajuegos.sql