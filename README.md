# Atieh

Atieh Project

---

Just Do this thing :

**Create MySQL**
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