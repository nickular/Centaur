#! /bin/bash

cmd1="mysql -u root -p < Centaur.sql"
cmd2="mysql -u root -p < ./scripts/AddTestModule.sql"
echo $cmd1
echo $cmd2
