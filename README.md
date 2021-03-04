# Atieh

Atieh Project

---

**Create User**
```mysql
CREATE USER 'milad'@'localhost' IDENTIFIED BY 'milad';
GRANT ALL PRIVILEGES ON *.* TO 'milad'@'localhost';
FLUSH PRIVILEGES;
```

**Restart Service**
```
sudo systemctl restart mysql.service
```

**Create Database**
```mysql
CREATE DATABASE Atieh;
```

**Restore backup file**
```
sudo mysql Atieh < Pack/backup.sql
```