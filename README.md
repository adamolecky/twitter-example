# Docker + Symfony Stack

![PHP 7.4](https://img.shields.io/badge/PHP-7.4-8892BF.svg)
![MariaDB](https://img.shields.io/badge/Database_Server-MariaDB_10.5-c0765a.svg)
![nginx](https://img.shields.io/badge/Webserver-nginx_1.19-009447.svg)
![Redis](https://img.shields.io/badge/Cache_Engine-Redis_6-D92A2A.svg)


## Basics

This repo contains basic docker images to run Symfony app. If you want to run this repo just: 

1. Download contents
2. Go into a directory with docker-compose.yml
3. Add .env file with at least `DATABASE_URL=mysql://user:password@db:3306/database` row
4. Run ``docker-compose up`` in your terminal 
5. Connect to php pod using ``docker-compose exec php bash``
6. Install vendor using ``composer install`` in app folder
7. Now you can access Symfony app on localhost.
8. you will probably need to stop images for kibana, redis, elastic to achieve faster responses, but this step is optional 
9. Populate env vars, in .env file in root of project. Especially you need to add your twitter tokens

Need to be populated env vars: 

```
DATABASE_URL=mysql://user:password@db:3306/database
TWITTER_CONSUMER_KEY=placeholder
TWITTER_CONSUMER_SECRET=placeholder
TWITTER_ACCESS_TOKEN=placeholder
TWITTER_ACCESS_TOKEN_SECRET=placeholder
```

Note: Be aware, that this is only <strong>mere example</strong> thus there is set only this paths:

http://localhost/twitter/list/{content}

For simplicity and ease of use URI is accepting GET requests. From default system example is 
configured to cache responses for 3600s. As main twitter library there is used https://github.com/dg/twitter-php. It is not perfect, but does its job.  

Thank you for feedback.
