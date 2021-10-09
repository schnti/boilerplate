#!/bin/bash

SCRIPT_RELATIVE_DIR=$(dirname "${BASH_SOURCE[0]}")
cd $SCRIPT_RELATIVE_DIR
pwd

git status

git pull
git add -A
git commit -m 'Server Backup'
git push