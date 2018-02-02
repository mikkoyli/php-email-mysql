# php-email-mysql

* This is example project that saves e-mail addresses to database

* Run with: 
```
docker-compose up
```

* You have to import default database schema first. Container must be running to do this
```
docker exec -i -t [container] /tmp/import.sh
```

* You can use email saver application from http://localhost:3000

* style.css created with http://livetools.uiparade.com/form-builder.html