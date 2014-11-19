
Start redis:

    sudo docker run --name redis redis


Start web server:

    sudo docker run -v $(pwd):/var/www/site -p 80 --link redis:redis -t -i web