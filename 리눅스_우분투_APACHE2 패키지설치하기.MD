### 리눅스환경의 우부툰에서 아파치 패키지 설치하기.

Ubuntu Linux를 쓰다보면은 Apache2를 설치할때 최신버젼이라고는 하지만 매우 old 하게 설치된다.
특정 버젼을 선별해서 설치하고 싶을 경우 아래 기능을 이용하면된다.
다만, 매우 최신 버젼일 경우에는 직접 소스코드를 다운로드 받아서 빌드하는 수 밖에 없다.

1. 현재 설치가능한 버젼 조회
	root@test:~# apt-cache showpkg apache2 | grep 2.4.
	2.4.43-1+ubuntu16.04.1+deb.sury.org+7
	2.4.18-2ubuntu3.17 (/var/lib/apt/lists.....

위 기능을 이용해서 설치가능한 패키지 종류를 보다 보면 2.4.43 이라는 단어를 발견하게 된다.
즉, apt-get install 로는 apache2 2.4.43 version 까지는 설치가 가능한 것이다. 

	$ sudo add-apt-repository ppa:ondrej/apache2
	$ sudo apt-get update

## 설치방법.
	root@test:~# sudo apt-get install apache2=2.4.43-1+ubuntu16.04.1+deb.sury.org+7
위와 같이 sudo apt-get install {패키지명}={버젼정보}를 넣어주면 된다.

이러고 나서 아파치 재시작하면 끝!

	root@test:~# sudo /etc/init.d/apache2 restart

## PHP설치
	root@test:~# sudo apt-get install php php-mysql
	Reading package lists... Done

	# sudo apt install libapache2-mod-php7.0  
	# sudo a2enmod php7.0                     
	# sudo systemctl restart apache2.service  

이렇게 하면 PHP 연동까지 깔끔하게 마무리가 된다.
