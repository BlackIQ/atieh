<img src="https://img.shields.io/github/license/BlackIQ/Narbon?style=flat-square" alt="License"/>
<img src="https://img.shields.io/github/languages/code-size/BlackIQ/Narbon?style=flat-square" alt="Code Size"/>

# Narbon

Narbon Project

---

**Create User**
```mysql
CREATE USER 'narbon'@'localhost' IDENTIFIED BY 'narbon';
GRANT ALL PRIVILEGES ON *.* TO 'narbon'@'localhost';
FLUSH PRIVILEGES;
```

**Restart Service**
```
sudo systemctl restart mysql.service
```

**Create Database**
```mysql
CREATE DATABASE narbon;
```

**Restore backup file**
```
sudo mysql narbon < Pack/backup.sql
```
