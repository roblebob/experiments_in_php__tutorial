# Experiments in PHP - Tutorial

This repository follows the tutorial [PHP Programming Language Tutorial - Full Course](https://www.youtube.com/watch?v=OK_JCtrrv-c&t=949s&ab_channel=freeCodeCamp.org).


## Installation

#### Step 1: Update your System
```bash
sudo apt update
sudo apt upgrade
```

#### Step 2: Install Apache, and start and enable the service
```bash
sudo apt install apache2
```

```bash
sudo systemctl start apache2
sudo systemctl enable apache2
```

#### Step 3: Install PHP (e.g. `php8.1`) and Extensions

```bash
sudo apt install php8.1
```

```bash
sudo apt install php8.1-cli php8.1-common php8.1-mysql php8.1-xml php8.1-mbstring php8.1-curl
```

... configuration file typically located in `/etc/php/8.1/apache2/php.ini`

#### Step 4: Configure Apache to Use PHP

```bash
sudo a2enmod php8.1
sudo systemctl restart apache2
```

#### Step 5: Create a Virtual Host Configuration File

```bash
sudo touch /etc/apache2/sites-available/tutorial.com.conf
```

... and add the following content:

```apache
<VirtualHost *:80>
    ServerAdmin <your-email>
    ServerName tutorial.com
    ServerAlias www.tutorial.com

    DocumentRoot /home/<your-username>/experiments_in_php__tutorial/www/html
    <Directory /home/<your-username>/experiments_in_php__tutorial/www/html>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/example.com_error.log
    CustomLog ${APACHE_LOG_DIR}/example.com_access.log combined
</VirtualHost>
``` 
... if you want the log files within the current project directory, you can use the following:

```apache
 ...

    ErrorLog /home/<your-username>/experiments_in_php__tutorial/example.com_error.log
    CustomLog /home/<your-username>/experiments_in_php__tutorial/example.com_access.log combined
 ...
```



#### Step 6: Enable the Virtual Host /  Disable the Default Virtual Host (Optional)

```bash
sudo a2ensite tutorial.com.conf
```

```bash
sudo a2dissite 000-default.conf
``` 

#### Step 7: Reload Apache to apply the changes:

```bash
sudo systemctl reload apache2
```