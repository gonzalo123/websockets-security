Integrating websockets with a web application
=======

Installation
====

Install node modules:
```
cd websockets
npm install
```

Install php vendors

```
cd ..
cd http
composer install
```

Run
===

Start node server
```
cd ..
node websockets/server.js
```

Start php server
```
php -S 0.0.0.0:8888 -t http/www
```

[![screencast](http://img.youtube.com/vi/vJWmnp3UXZI/0.jpg)](http://www.youtube.com/watch?v=vJWmnp3UXZI)
