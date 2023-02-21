## wine 패키지는 기본 우분투 리포지터리에 포함되어 있기 때문에 쉽게 설치 할 수 있다.

* 많은 윈도우 어플리케이션이 32비트 아키텍처로 개발되어있기 때문에 제일 먼저 64 bit Ubuntu 에서 32비트 아키텍처를 사용 할 수 있도록 설정 해 주어야 한다.


  sudo dpkg --add-architecture i386
  sudo apt update


-- 실행화면.

```
  기존:1 http://packages.microsoft.com/repos/code stable InRelease  
  기존:2 https://linux.teamviewer.com/deb stable InRelease
  받기:3 https://dl.google.com/linux/chrome/deb stable InRelease [1,811 B]       
  오류:3 https://dl.google.com/linux/chrome/deb stable InRelease                 
    다음 서명들은 공개키가 없기 때문에 인증할 수 없습니다: NO_PUBKEY 4EB27DB2A3B88B8B
  기존:4 http://security.ubuntu.com/ubuntu focal-security InRelease              
  기존:5 http://kr.archive.ubuntu.com/ubuntu focal InRelease                    
  기존:6 http://kr.archive.ubuntu.com/ubuntu focal-updates InRelease
  기존:7 http://kr.archive.ubuntu.com/ubuntu focal-backports InRelease
  내려받기 1,811 바이트, 소요시간 2초 (1,188 바이트/초)
  패키지 목록을 읽는 중입니다... 완료
  의존성 트리를 만드는 중입니다       
  상태 정보를 읽는 중입니다... 완료
  패키지 145이(가) 업그레이드되었습니다. 'apt list --upgradable'를 실행하여 확인해 보십시오.
  W: An error occurred during the signature verification. The repository is not updated and the previous index files will be used. GPG error: https://dl.google.com/linux/chrome/deb stable InRelease: 다음 서명들은 공개키가 없기 때문에 인증할 수 없습니다: NO_PUBKEY 4EB27DB2A3B88B8B
  W: https://dl.google.com/linux/chrome/deb/dists/stable/InRelease 파일을 받는데 실패했습니다  다음 서명들은 공개키가 없기 때문에 인증할 수 없습니다: NO_PUBKEY 4EB27DB2A3B88B8B
  W: Some index files failed to download. They have been ignored, or old ones used instead.
```


* 다음으로 와인을 설치를 위해 key 파일을 추가 한다.

- 실행화면.

```
  wget -nc https://dl.winehq.org/wine-builds/winehq.key
  sudo apt-key add winehq.key

  -2023-02-21 09:27:58--  https://dl.winehq.org/wine-builds/winehq.key
  dl.winehq.org (dl.winehq.org)을(를) 해석하는 중... 146.75.50.217
  접속 dl.winehq.org (dl.winehq.org)|146.75.50.217|:443... 접속됨.
  HTTP 요청을 전송했습니다. 응답을 기다리는 중입니다... 200 OK
  길이: 3220 (3.1K) [application/pgp-keys]
  다음 위치에 저장: `winehq.key'

  winehq.key          100%[===================>]   3.14K  --.-KB/s    / 0s       

  2023-02-21 09:27:58 (12.4 MB/s) - `winehq.key' 저장됨 [3220/3220]
```


-- ok가 뜨면 된거다.


* 이제 정말 Wine을 설치 해준다.

- 먼저, 설치되어 있는 우분트 버젼을 확인한다.


  cat /etc/issue
  
  
- 실행화면
 
 ```
   Ubuntu 20.04.3 LTS \n \l
```


  sudo add-apt-repository 'deb https://dl.winehq.org/wine-builds/ubuntu/ focal main'
  

- 실행화면

```
  받기:1 https://dl.winehq.org/wine-builds/ubuntu focal InRelease [8,041 B]
  기존:2 http://packages.microsoft.com/repos/code stable InRelease               
  받기:3 https://dl.winehq.org/wine-builds/ubuntu focal/main amd64 Packages [388 kB]
  기존:4 https://linux.teamviewer.com/deb stable InRelease                       
  받기:5 https://dl.winehq.org/wine-builds/ubuntu focal/main all Packages [1,268 B]
  받기:6 https://dl.winehq.org/wine-builds/ubuntu focal/main i386 Packages [389 kB]
  받기:7 https://dl.google.com/linux/chrome/deb stable InRelease [1,811 B]       
  오류:7 https://dl.google.com/linux/chrome/deb stable InRelease                 
    다음 서명들은 공개키가 없기 때문에 인증할 수 없습니다: NO_PUBKEY 4EB27DB2A3B88B8B
  기존:8 http://kr.archive.ubuntu.com/ubuntu focal InRelease                     
  기존:9 http://kr.archive.ubuntu.com/ubuntu focal-updates InRelease             
  기존:10 http://security.ubuntu.com/ubuntu focal-security InRelease            
  기존:11 http://kr.archive.ubuntu.com/ubuntu focal-backports InRelease         
  내려받기 786 k바이트, 소요시간 1초 (613 k바이트/초)
  패키지 목록을 읽는 중입니다... 완료
  W: An error occurred during the signature verification. The repository is not updated and the previous index files will be used. GPG error: https://dl.google.com/linux/chrome/deb stable InRelease: 다음 서명들은 공개키가 없기 때문에 인증할 수 없습니다: NO_PUBKEY 4EB27DB2A3B88B8B
  W: https://dl.google.com/linux/chrome/deb/dists/stable/InRelease 파일을 받는데 실패했습니다  다음 서명들은 공개키가 없기 때문에 인증할 수 없습니다: NO_PUBKEY 4EB27DB2A3B88B8B
  W: Some index files failed to download. They have been ignored, or old ones used instead.
```


* 다음 명령어 입력. - wine 을 설치.


  sudo apt update
  sudo apt install --install-recommends winehq-stable


- 설치화면

```
abc@abc-H110M4-C3D-C3V:~$ sudo apt update
0% [작업중]
기존:1 https://dl.winehq.org/wine-builds/ubuntu focal InRelease
기존:2 http://packages.microsoft.com/repos/code stable InRelease               
받기:3 https://dl.google.com/linux/chrome/deb stable InRelease [1,811 B]       
기존:4 https://linux.teamviewer.com/deb stable InRelease                       
오류:3 https://dl.google.com/linux/chrome/deb stable InRelease                 
  다음 서명들은 공개키가 없기 때문에 인증할 수 없습니다: NO_PUBKEY 4EB27DB2A3B88B8B
기존:5 http://security.ubuntu.com/ubuntu focal-security InRelease              
기존:6 http://kr.archive.ubuntu.com/ubuntu focal InRelease                     
기존:7 http://kr.archive.ubuntu.com/ubuntu focal-updates InRelease     
기존:8 http://kr.archive.ubuntu.com/ubuntu focal-backports InRelease
패키지 목록을 읽는 중입니다... 완료     
의존성 트리를 만드는 중입니다       
상태 정보를 읽는 중입니다... 완료
패키지 145이(가) 업그레이드되었습니다. 'apt list --upgradable'를 실행하여 확인해 보십시오.
W: An error occurred during the signature verification. The repository is not updated and the previous index files will be used. GPG error: https://dl.google.com/linux/chrome/deb stable InRelease: 다음 서명들은 공개키가 없기 때문에 인증할 수 없습니다: NO_PUBKEY 4EB27DB2A3B88B8B
W: https://dl.google.com/linux/chrome/deb/dists/stable/InRelease 파일을 받는데 실패했습니다  다음 서명들은 공개키가 없기 때문에 인증할 수 없습니다: NO_PUBKEY 4EB27DB2A3B88B8B
W: Some index files failed to download. They have been ignored, or old ones used instead.
abc@abc-H110M4-C3D-C3V:~$ sudo apt install --install-recommends winehq-stable
패키지 목록을 읽는 중입니다... 완료
의존성 트리를 만드는 중입니다       
상태 정보를 읽는 중입니다... 완료
다음의 추가 패키지가 설치될 것입니다 :
-중략-
  libpcre2-8-0:i386 libpcre3:iabc@abc-H110M4-C3D-C3V:~$ sudo apt update
0% [작업중]
기존:1 https://dl.winehq.org/wine-builds/ubuntu focal InRelease
기존:2 http://packages.microsoft.com/repos/code stable InRelease               
받기:3 https://dl.google.com/linux/chrome/deb stable InRelease [1,811 B]       
기존:4 https://linux.teamviewer.com/deb stable InRelease                       
오류:3 https://dl.google.com/linux/chrome/deb stable InRelease                 
  다음 서명들은 공개키가 없기 때문에 인증할 수 없습니다: NO_PUBKEY 4EB27DB2A3B88B8B
기존:5 http://security.ubuntu.com/ubuntu focal-security InRelease              
기존:6 http://kr.archive.ubuntu.com/ubuntu focal InRelease                     
기존:7 http://kr.archive.ubuntu.com/ubuntu focal-updates InRelease     
기존:8 http://kr.archive.ubuntu.com/ubuntu focal-backports InRelease
패키지 목록을 읽는 중입니다... 완료     
의존성 트리를 만드는 중입니다       
상태 정보를 읽는 중입니다... 완료
패키지 145이(가) 업그레이드되었습니다. 'apt list --upgradable'를 실행하여 확인해 보십시오.
W: An error occurred during the signature verification. The repository is not updated and the previous index files will be used. GPG error: https://dl.google.com/linux/chrome/deb stable InRelease: 다음 서명들은 공개키가 없기 때문에 인증할 수 없습니다: NO_PUBKEY 4EB27DB2A3B88B8B
W: https://dl.google.com/linux/chrome/deb/dists/stable/InRelease 파일을 받는데 실패했습니다  다음 서명들은 공개키가 없기 때문에 인증할 수 없습니다: NO_PUBKEY 4EB27DB2A3B88B8B
W: Some index files failed to download. They have been ignored, or old ones used instead.
abc@abc-H110M4-C3D-C3V:~$ sudo apt install --install-recommends winehq-stable
패키지 목록을 읽는 중입니다... 완료
의존성 트리를 만드는 중입니다       
상태 정보를 읽는 중입니다... 완료
-
다음 패키지를 업그레이드할 것입니다:
  libasound2 libasound2-data libc-dev-bin libc6 libc6-dbg libc6-dev
  libkeyutils1 libnss-systemd libpam-systemd libpulse-mainloop-glib0 libpulse0
  libpulsedsp libsensors5 libsystemd0 libudev1 pulseaudio
  pulseaudio-module-bluetooth pulseaudio-utils systemd systemd-sysv
  systemd-timesyncd udev
22개 업그레이드, 187개 새로 설치, 0개 제거 및 123개 업그레이드 안 함.
322 M바이트 아카이브를 받아야 합니다.
이 작업 후 2,097 M바이트의 디스크 공간을 더 사용하게 됩니다.
계속 하시겠습니까? [Y/n]
```

* 여기까지 하면 wine 준비가 된거다. 이제 카카오톡 pc 를 설치하면 된다.
