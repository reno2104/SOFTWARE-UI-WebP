### mysqli_real_connect(): (HY000/1698) : Access denied for user ‘root’@’localhost’ 대처 방법

- MySQL 5.7, MariaDB 10.1 이후 버전은 보안상 root 계정은 터미널에서만 접속할 수 있으며 
root를 제외한 사용자 계정으로 phpMyAdmin에 접속할 수 있기 때문에 MySQL에서 새로 사용자를 만들고, 
권한을 부여해서 root 계정처럼 사용할 수 있다.

```ubuntu
abc@abc-H110M4-C3D-C3V:~$ sudo su
[sudo] abc의 암호: 
root@abc-H110M4-C3D-C3V:/home/abc# mysql -u root -p
Enter password: 
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 15
Server version: 8.0.32-0ubuntu0.20.04.2 (Ubuntu)

Copyright (c) 2000, 2023, Oracle and/or its affiliates.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> create user 'root'@'%' identified by 'abc!QAZ';
Query OK, 0 rows affected (0.17 sec)

mysql> grant all privileges on *.* to 'root'@'%';
Query OK, 0 rows affected (0.11 sec)
```

- ②mysql -u root -p를 입력해 root 계정으로 로그인 한 후 다음 명령어를 입력해 
새로운 MySQL 계정을 만들고 모든 권한을 부여해 root와 같은 계정을 만들어 준다.


```ubuntu
mysql> UPDATE mysql.user SET Grant_priv='Y', Super_Priv='Y' WHERE user='root';
Query OK, 1 row affected (0.21 sec)
Rows matched: 1  Changed: 1  Warnings: 0

mysql> FLUSH PRIVILEGES;
Query OK, 0 rows affected (0.11 sec)
```

보안을 포기하고 root와 동등한 권한을 사용하고 싶다면 터미널에서 위 명령어를 추가로 입력하면 되겠다.
