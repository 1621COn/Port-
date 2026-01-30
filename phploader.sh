!/bin/bash

PORT=8000
DOC_ROOT="home/linuxtor/Desktop/Java/"

# Start the PHP built-in server in the background
php -S localhost:$PORT -t $DOC_ROOT &

# Wait a moment for the server to start
sleep 1

xdg-open http://localhost:$PORT/Help.php

'
