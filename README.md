# Atieh

Atieh Project

Just Do this thing :

MySQL
```
CREATE USER 'Ashley'@'localhost' IDENTIFIED BY 'Ashley';
GRANT ALL PRIVILEGES ON *.* TO 'Ashley'@'localhost';
FLUSH PRIVILEGES;
```

Restart Service
```
sudo systemctl restart mysql.service
```

Create Database
```
CREATE DATABASE Atieh;
```

Restore backup file
```
sudo mysql Atieh < Pack/backup.sql
```