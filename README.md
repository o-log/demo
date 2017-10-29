Barebone application for php-admin library.

Library <a href="http://php-admin.o-log.ru"> demo site</a>.

# Installation

In your terminal type:

    composer create-project o-log/demo app

Where "app" is the name of the directory the project has to be installed to (the directory will be created).

After the installation you have to set up the database connection: open Config/Config.php and find the following line:

    DBConfig::setConnector(self::APP_CONNECTOR, new ConnectorMySQL('127.0.0.1', 'app', 'root', '1234'));
    
Here you can alter database name (replace "app" with the name of your application) and MySQL user name and password. Also you have to create the database using MySQL client.

After configuring database perform the database migration:

    vendor/bin/migrate
    
That's it! Run the application with php built-in server:

    bin/run
    
And than open localhost:8000 in your browser.

