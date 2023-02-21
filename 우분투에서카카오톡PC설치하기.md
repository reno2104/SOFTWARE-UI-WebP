## wine 패키지는 기본 우분투 리포지터리에 포함되어 있기 때문에 쉽게 설치 할 수 있다.

## 많은 윈도우 어플리케이션이 32비트 아키텍처로 개발되어있기 때문에 제일 먼저 64 bit Ubuntu 에서 32비트 아키텍처를 사용 할 수 있도록 설정 해 주어야 한다.


  sudo dpkg --add-architecture i386
  sudo apt update


-- 실행화면.


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



## 다음으로 와인을 설치를 위해 key 파일을 추가 한다.

- 실행화면.

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


-- ok가 뜨면 된거다.


## 이제 정말 Wine을 설치 해준다.

- 먼저, 설치되어 있는 우분트 버젼을 확인한다.


  cat /etc/issue
  
  
- 실행화면
 
   Ubuntu 20.04.3 LTS \n \l


  sudo add-apt-repository 'deb https://dl.winehq.org/wine-builds/ubuntu/ focal main'
  

- 실행화면

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


## 다음 명령어 입력. - wine 을 설치.


  sudo apt update
  sudo apt install --install-recommends winehq-stable


- 설치화면

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
  gcc-10-base:i386 gstreamer1.0-plugins-base:i386 libapparmor1:i386
  libasn1-8-heimdal:i386 libasound2 libasound2:i386 libasound2-data
  libasound2-plugins:i386 libasyncns0:i386 libatomic1:i386
  libavahi-client3:i386 libavahi-common-data:i386 libavahi-common3:i386
  libblkid1:i386 libbrotli1:i386 libbsd0:i386 libbz2-1.0:i386 libc-dev-bin
  libc6 libc6:i386 libc6-dbg libc6-dev libcairo2:i386 libcap2:i386 libcapi20-3
  libcapi20-3:i386 libcdparanoia0:i386 libcom-err2:i386 libcrypt1:i386
  libcups2:i386 libcurl3-gnutls:i386 libdb5.3:i386 libdbus-1-3:i386
  libdrm-amdgpu1:i386 libdrm-intel1:i386 libdrm-nouveau2:i386
  libdrm-radeon1:i386 libdrm2:i386 libedit2:i386 libelf1:i386 libexif12:i386
  libexpat1:i386 libffi7:i386 libflac8:i386 libfontconfig1:i386
  libfreetype6:i386 libgcc-s1:i386 libgcrypt20:i386 libgd3:i386
  libgdbm-compat4:i386 libgdbm6:i386 libgl1:i386 libgl1-mesa-dri:i386
  libglapi-mesa:i386 libglib2.0-0:i386 libglu1-mesa:i386 libglvnd0:i386
  libglx-mesa0:i386 libglx0:i386 libgmp10:i386 libgnutls30:i386
  libgpg-error-l10n libgpg-error0:i386 libgphoto2-6:i386
  libgphoto2-port12:i386 libgpm2:i386 libgsm1 libgsm1:i386
  libgssapi-krb5-2:i386 libgssapi3-heimdal:i386
  libgstreamer-plugins-base1.0-0:i386 libgstreamer1.0-0:i386
  libhcrypto4-heimdal:i386 libheimbase1-heimdal:i386 libheimntlm0-heimdal:i386
  libhogweed5:i386 libhx509-5-heimdal:i386 libicu66:i386 libidn2-0:i386
  libieee1284-3:i386 libjack-jackd2-0:i386 libjbig0:i386 libjpeg-turbo8:i386
  libjpeg8:i386 libk5crypto3:i386 libkeyutils1 libkeyutils1:i386
  libkrb5-26-heimdal:i386 libkrb5-3:i386 libkrb5support0:i386
  libldap-2.4-2:i386 libllvm12:i386 libltdl7:i386 liblz4-1:i386 liblzma5:i386
  libmount1:i386 libmysqlclient21:i386 libncurses6:i386 libnettle7:i386
  libnghttp2-14:i386 libnss-systemd libodbc1 libodbc1:i386 libogg0:i386
  libopus0:i386 liborc-0.4-0:i386 libosmesa6 libosmesa6:i386 libp11-kit0:i386
  libpam-systemd libpcap0.8:i386 libpci3:i386 libpciaccess0:i386
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
다음의 추가 패키지가 설치될 것입니다 :
  gcc-10-base:i386 gstreamer1.0-plugins-base:i386 libapparmor1:i386
  libasn1-8-heimdal:i386 libasound2 libasound2:i386 libasound2-data
  libasound2-plugins:i386 libasyncns0:i386 libatomic1:i386
  libavahi-client3:i386 libavahi-common-data:i386 libavahi-common3:i386
  libblkid1:i386 libbrotli1:i386 libbsd0:i386 libbz2-1.0:i386 libc-dev-bin
  libc6 libc6:i386 libc6-dbg libc6-dev libcairo2:i386 libcap2:i386 libcapi20-3
  libcapi20-3:i386 libcdparanoia0:i386 libcom-err2:i386 libcrypt1:i386
  libcups2:i386 libcurl3-gnutls:i386 libdb5.3:i386 libdbus-1-3:i386
  libdrm-amdgpu1:i386 libdrm-intel1:i386 libdrm-nouveau2:i386
  libdrm-radeon1:i386 libdrm2:i386 libedit2:i386 libelf1:i386 libexif12:i386
  libexpat1:i386 libffi7:i386 libflac8:i386 libfontconfig1:i386
  libfreetype6:i386 libgcc-s1:i386 libgcrypt20:i386 libgd3:i386
  libgdbm-compat4:i386 libgdbm6:i386 libgl1:i386 libgl1-mesa-dri:i386
  libglapi-mesa:i386 libglib2.0-0:i386 libglu1-mesa:i386 libglvnd0:i386
  libglx-mesa0:i386 libglx0:i386 libgmp10:i386 libgnutls30:i386
  libgpg-error-l10n libgpg-error0:i386 libgphoto2-6:i386
  libgphoto2-port12:i386 libgpm2:i386 libgsm1 libgsm1:i386
  libgssapi-krb5-2:i386 libgssapi3-heimdal:i386
  libgstreamer-plugins-base1.0-0:i386 libgstreamer1.0-0:i386
  libhcrypto4-heimdal:i386 libheimbase1-heimdal:i386 libheimntlm0-heimdal:i386
  libhogweed5:i386 libhx509-5-heimdal:i386 libicu66:i386 libidn2-0:i386
  libieee1284-3:i386 libjack-jackd2-0:i386 libjbig0:i386 libjpeg-turbo8:i386
  libjpeg8:i386 libk5crypto3:i386 libkeyutils1 libkeyutils1:i386
  libkrb5-26-heimdal:i386 libkrb5-3:i386 libkrb5support0:i386
  libldap-2.4-2:i386 libllvm12:i386 libltdl7:i386 liblz4-1:i386 liblzma5:i386
  libmount1:i386 libmysqlclient21:i386 libncurses6:i386 libnettle7:i386
  libnghttp2-14:i386 libnss-systemd libodbc1 libodbc1:i386 libogg0:i386
  libopus0:i386 liborc-0.4-0:i386 libosmesa6 libosmesa6:i386 libp11-kit0:i386
  libpam-systemd libpcap0.8:i386 libpci3:i386 libpciaccess0:i386
  libpcre2-8-0:i386 libpcre3:i386 libperl5.30:i386 libpixman-1-0:i386
  libpng16-16:i386 libpsl5:i386 libpulse-mainloop-glib0 libpulse0
  libpulse0:i386 libpulsedsp libroken18-heimdal:i386 librtmp1:i386
  libsamplerate0:i386 libsane:i386 libsasl2-2:i386 libsasl2-modules:i386
  libsasl2-modules-db:i386 libsdl2-2.0-0 libsdl2-2.0-0:i386 libselinux1:i386
  libsensors5 libsensors5:i386 libsndfile1:i386 libsnmp35:i386
  libsqlite3-0:i386 libssh-4:i386 libssl1.1:i386 libstdc++6:i386 libsystemd0
  libsystemd0:i386 libtasn1-6:i386 libtheora0:i386 libtiff5:i386
  libtinfo6:i386 libudev1 libudev1:i386 libunistring2:i386 libusb-1.0-0:i386
  libuuid1:i386 libv4l-0:i386 libv4lconvert0:i386 libvisual-0.4-0:i386
  libvorbis0a:i386 libvorbisenc2:i386 libvulkan1:i386 libwayland-client0:i386
  libwayland-cursor0:i386 libwayland-egl1:i386 libwebp6:i386
  libwind0-heimdal:i386 libwrap0:i386 libx11-6:i386 libx11-xcb1:i386
  libxau6:i386 libxcb-dri2-0:i386 libxcb-dri3-0:i386 libxcb-glx0:i386
  libxcb-present0:i386 libxcb-randr0:i386 libxcb-render0:i386 libxcb-shm0:i386
  libxcb-sync1:i386 libxcb-xfixes0:i386 libxcb1:i386 libxcomposite1:i386
  libxcursor1:i386 libxdmcp6:i386 libxext6:i386 libxfixes3:i386 libxi6:i386
  libxinerama1:i386 libxkbcommon0:i386 libxml2:i386 libxpm4:i386
  libxrandr2:i386 libxrender1:i386 libxshmfence1:i386 libxslt1.1:i386
  libxss1:i386 libxxf86vm1:i386 libzstd1:i386 mesa-vulkan-drivers:i386
  ocl-icd-libopencl1 ocl-icd-libopencl1:i386 pulseaudio
  pulseaudio-module-bluetooth pulseaudio-utils systemd systemd-sysv
  systemd-timesyncd udev wine-stable wine-stable-amd64 wine-stable-i386:i386
  zlib1g:i386
제안하는 패키지:
  gvfs:i386 glibc-doc glibc-doc:i386 locales:i386 rng-tools:i386
  libgd-tools:i386 gdbm-l10n:i386 gnutls-bin:i386 gphoto2:i386 gpm:i386
  krb5-doc:i386 krb5-user:i386 libvisual-0.4-plugins:i386
  gstreamer1.0-tools:i386 jackd2:i386 libmyodbc odbc-postgresql tdsodbc
  unixodbc-bin libmyodbc:i386 odbc-postgresql:i386 tdsodbc:i386
  unixodbc-bin:i386 opus-tools:i386 hplip:i386
  libsasl2-modules-gssapi-mit:i386 | libsasl2-modules-gssapi-heimdal:i386
  libsasl2-modules-ldap:i386 libsasl2-modules-otp:i386
  libsasl2-modules-sql:i386 lm-sensors lm-sensors:i386 opencl-icd
  opencl-icd:i386 pavumeter pavucontrol paman paprefs ubuntu-sounds
  systemd-container
다음 새 패키지를 설치할 것입니다:
  gcc-10-base:i386 gstreamer1.0-plugins-base:i386 libapparmor1:i386
  libasn1-8-heimdal:i386 libasound2:i386 libasound2-plugins:i386
  libasyncns0:i386 libatomic1:i386 libavahi-client3:i386
  libavahi-common-data:i386 libavahi-common3:i386 libblkid1:i386
  libbrotli1:i386 libbsd0:i386 libbz2-1.0:i386 libc6:i386 libcairo2:i386
  libcap2:i386 libcapi20-3 libcapi20-3:i386 libcdparanoia0:i386
  libcom-err2:i386 libcrypt1:i386 libcups2:i386 libcurl3-gnutls:i386
  libdb5.3:i386 libdbus-1-3:i386 libdrm-amdgpu1:i386 libdrm-intel1:i386
  libdrm-nouveau2:i386 libdrm-radeon1:i386 libdrm2:i386 libedit2:i386
  libelf1:i386 libexif12:i386 libexpat1:i386 libffi7:i386 libflac8:i386
  libfontconfig1:i386 libfreetype6:i386 libgcc-s1:i386 libgcrypt20:i386
  libgd3:i386 libgdbm-compat4:i386 libgdbm6:i386 libgl1:i386
  libgl1-mesa-dri:i386 libglapi-mesa:i386 libglib2.0-0:i386 libglu1-mesa:i386
  libglvnd0:i386 libglx-mesa0:i386 libglx0:i386 libgmp10:i386 libgnutls30:i386
  libgpg-error-l10n libgpg-error0:i386 libgphoto2-6:i386
  libgphoto2-port12:i386 libgpm2:i386 libgsm1 libgsm1:i386
  libgssapi-krb5-2:i386 libgssapi3-heimdal:i386
  libgstreamer-plugins-base1.0-0:i386 libgstreamer1.0-0:i386
  libhcrypto4-heimdal:i386 libheimbase1-heimdal:i386 libheimntlm0-heimdal:i386
  libhogweed5:i386 libhx509-5-heimdal:i386 libicu66:i386 libidn2-0:i386
  libieee1284-3:i386 libjack-jackd2-0:i386 libjbig0:i386 libjpeg-turbo8:i386
  libjpeg8:i386 libk5crypto3:i386 libkeyutils1:i386 libkrb5-26-heimdal:i386
  libkrb5-3:i386 libkrb5support0:i386 libldap-2.4-2:i386 libllvm12:i386
  libltdl7:i386 liblz4-1:i386 liblzma5:i386 libmount1:i386
  libmysqlclient21:i386 libncurses6:i386 libnettle7:i386 libnghttp2-14:i386
  libodbc1 libodbc1:i386 libogg0:i386 libopus0:i386 liborc-0.4-0:i386
  libosmesa6 libosmesa6:i386 libp11-kit0:i386 libpcap0.8:i386 libpci3:i386
  libpciaccess0:i386 libpcre2-8-0:i386 libpcre3:i386 libperl5.30:i386
  libpixman-1-0:i386 libpng16-16:i386 libpsl5:i386 libpulse0:i386
  libroken18-heimdal:i386 librtmp1:i386 libsamplerate0:i386 libsane:i386
  libsasl2-2:i386 libsasl2-modules:i386 libsasl2-modules-db:i386 libsdl2-2.0-0
  libsdl2-2.0-0:i386 libselinux1:i386 libsensors5:i386 libsndfile1:i386
  libsnmp35:i386 libsqlite3-0:i386 libssh-4:i386 libssl1.1:i386
  libstdc++6:i386 libsystemd0:i386 libtasn1-6:i386 libtheora0:i386
  libtiff5:i386 libtinfo6:i386 libudev1:i386 libunistring2:i386
  libusb-1.0-0:i386 libuuid1:i386 libv4l-0:i386 libv4lconvert0:i386
  libvisual-0.4-0:i386 libvorbis0a:i386 libvorbisenc2:i386 libvulkan1:i386
  libwayland-client0:i386 libwayland-cursor0:i386 libwayland-egl1:i386
  libwebp6:i386 libwind0-heimdal:i386 libwrap0:i386 libx11-6:i386
  libx11-xcb1:i386 libxau6:i386 libxcb-dri2-0:i386 libxcb-dri3-0:i386
  libxcb-glx0:i386 libxcb-present0:i386 libxcb-randr0:i386 libxcb-render0:i386
  libxcb-shm0:i386 libxcb-sync1:i386 libxcb-xfixes0:i386 libxcb1:i386
  libxcomposite1:i386 libxcursor1:i386 libxdmcp6:i386 libxext6:i386
  libxfixes3:i386 libxi6:i386 libxinerama1:i386 libxkbcommon0:i386
  libxml2:i386 libxpm4:i386 libxrandr2:i386 libxrender1:i386
  libxshmfence1:i386 libxslt1.1:i386 libxss1:i386 libxxf86vm1:i386
  libzstd1:i386 mesa-vulkan-drivers:i386 ocl-icd-libopencl1
  ocl-icd-libopencl1:i386 wine-stable wine-stable-amd64 wine-stable-i386:i386
  winehq-stable zlib1g:i386
다음 패키지를 업그레이드할 것입니다:
  libasound2 libasound2-data libc-dev-bin libc6 libc6-dbg libc6-dev
  libkeyutils1 libnss-systemd libpam-systemd libpulse-mainloop-glib0 libpulse0
  libpulsedsp libsensors5 libsystemd0 libudev1 pulseaudio
  pulseaudio-module-bluetooth pulseaudio-utils systemd systemd-sysv
  systemd-timesyncd udev
22개 업그레이드, 187개 새로 설치, 0개 제거 및 123개 업그레이드 안 함.
322 M바이트 아카이브를 받아야 합니다.
이 작업 후 2,097 M바이트의 디스크 공간을 더 사용하게 됩니다.
계속 하시겠습니까? [Y/n]386 libperl5.30:i386 libpixman-1-0:i386
  libpng16-16:i386 libpsl5:i386 libpulse-mainloop-glib0 libpulse0
  libpulse0:i386 libpulsedsp libroken18-heimdal:i386 librtmp1:i386
  libsamplerate0:i386 libsane:i386 libsasl2-2:i386 libsasl2-modules:i386
  libsasl2-modules-db:i386 libsdl2-2.0-0 libsdl2-2.0-0:i386 libselinux1:i386
  libsensors5 libsensors5:i386 libsndfile1:i386 libsnmp35:i386
  libsqlite3-0:i386 libssh-4:i386 libssl1.1:i386 libstdc++6:i386 libsystemd0
  libsystemd0:i386 libtasn1-6:i386 libtheora0:i386 libtiff5:i386
  libtinfo6:i386 libudev1 libudev1:i386 libunistring2:i386 libusb-1.0-0:i386
  libuuid1:i386 libv4l-0:i386 libv4lconvert0:i386 libvisual-0.4-0:i386
  libvorbis0a:i386 libvorbisenc2:i386 libvulkan1:i386 libwayland-client0:i386
  libwayland-cursor0:i386 libwayland-egl1:i386 libwebp6:i386
  libwind0-heimdal:i386 libwrap0:i386 libx11-6:i386 libx11-xcb1:i386
  libxau6:i386 libxcb-dri2-0:i386 libxcb-dri3-0:i386 libxcb-glx0:i386
  libxcb-present0:i386 libxcb-randr0:i386 libxcb-render0:i386 libxcb-shm0:i386
  libxcb-sync1:i386 libxcb-xfixes0:i386 libxcb1:i386 libxcomposite1:i386
  libxcursor1:i386 libxdmcp6:i386 libxext6:i386 libxfixes3:i386 libxi6:i386
  libxinerama1:i386 libxkbcommon0:i386 libxml2:i386 libxpm4:i386
  libxrandr2:i386 libxrender1:i386 libxshmfence1:i386 libxslt1.1:i386
  libxss1:i386 libxxf86vm1:i386 libzstd1:i386 mesa-vulkan-drivers:i386
  ocl-icd-libopencl1 ocl-icd-libopencl1:i386 pulseaudio
  pulseaudio-module-bluetooth pulseaudio-utils systemd systemd-sysv
  systemd-timesyncd udev wine-stable wine-stable-amd64 wine-stable-i386:i386
  zlib1g:i386
제안하는 패키지:
  gvfs:i386 glibc-doc glibc-doc:i386 locales:i386 rng-tools:i386
  libgd-tools:i386 gdbm-l10n:i386 gnutls-bin:i386 gphoto2:i386 gpm:i386
  krb5-doc:i386 krb5-user:i386 libvisual-0.4-plugins:i386
  gstreamer1.0-tools:i386 jackd2:i386 libmyodbc odbc-postgresql tdsodbc
  unixodbc-bin libmyodbc:i386 odbc-postgresql:i386 tdsodbc:i386
  unixodbc-bin:i386 opus-tools:i386 hplip:i386
  libsasl2-modules-gssapi-mit:i386 | libsasl2-modules-gssapi-heimdal:i386
  libsasl2-modules-ldap:i386 libsasl2-modules-otp:i386
  libsasl2-modules-sql:i386 lm-sensors lm-sensors:i386 opencl-icd
  opencl-icd:i386 pavumeter pavucontrol paman paprefs ubuntu-sounds
  systemd-container
다음 새 패키지를 설치할 것입니다:
  gcc-10-base:i386 gstreamer1.0-plugins-base:i386 libapparmor1:i386
  libasn1-8-heimdal:i386 libasound2:i386 libasound2-plugins:i386
  libasyncns0:i386 libatomic1:i386 libavahi-client3:i386
  libavahi-common-data:i386 libavahi-common3:i386 libblkid1:i386
  libbrotli1:i386 libbsd0:i386 libbz2-1.0:i386 libc6:i386 libcairo2:i386
  libcap2:i386 libcapi20-3 libcapi20-3:i386 libcdparanoia0:i386
  libcom-err2:i386 libcrypt1:i386 libcups2:i386 libcurl3-gnutls:i386
  libdb5.3:i386 libdbus-1-3:i386 libdrm-amdgpu1:i386 libdrm-intel1:i386
  libdrm-nouveau2:i386 libdrm-radeon1:i386 libdrm2:i386 libedit2:i386
  libelf1:i386 libexif12:i386 libexpat1:i386 libffi7:i386 libflac8:i386
  libfontconfig1:i386 libfreetype6:i386 libgcc-s1:i386 libgcrypt20:i386
  libgd3:i386 libgdbm-compat4:i386 libgdbm6:i386 libgl1:i386
  libgl1-mesa-dri:i386 libglapi-mesa:i386 libglib2.0-0:i386 libglu1-mesa:i386
  libglvnd0:i386 libglx-mesa0:i386 libglx0:i386 libgmp10:i386 libgnutls30:i386
  libgpg-error-l10n libgpg-error0:i386 libgphoto2-6:i386
  libgphoto2-port12:i386 libgpm2:i386 libgsm1 libgsm1:i386
  libgssapi-krb5-2:i386 libgssapi3-heimdal:i386
  libgstreamer-plugins-base1.0-0:i386 libgstreamer1.0-0:i386
  libhcrypto4-heimdal:i386 libheimbase1-heimdal:i386 libheimntlm0-heimdal:i386
  libhogweed5:i386 libhx509-5-heimdal:i386 libicu66:i386 libidn2-0:i386
  libieee1284-3:i386 libjack-jackd2-0:i386 libjbig0:i386 libjpeg-turbo8:i386
  libjpeg8:i386 libk5crypto3:i386 libkeyutils1:i386 libkrb5-26-heimdal:i386
  libkrb5-3:i386 libkrb5support0:i386 libldap-2.4-2:i386 libllvm12:i386
  libltdl7:i386 liblz4-1:i386 liblzma5:i386 libmount1:i386
  libmysqlclient21:i386 libncurses6:i386 libnettle7:i386 libnghttp2-14:i386
  libodbc1 libodbc1:i386 libogg0:i386 libopus0:i386 liborc-0.4-0:i386
  libosmesa6 libosmesa6:i386 libp11-kit0:i386 libpcap0.8:i386 libpci3:i386
  libpciaccess0:i386 libpcre2-8-0:i386 libpcre3:i386 libperl5.30:i386
  libpixman-1-0:i386 libpng16-16:i386 libpsl5:i386 libpulse0:i386
  libroken18-heimdal:i386 librtmp1:i386 libsamplerate0:i386 libsane:i386
  libsasl2-2:i386 libsasl2-modules:i386 libsasl2-modules-db:i386 libsdl2-2.0-0
  libsdl2-2.0-0:i386 libselinux1:i386 libsensors5:i386 libsndfile1:i386
  libsnmp35:i386 libsqlite3-0:i386 libssh-4:i386 libssl1.1:i386
  libstdc++6:i386 libsystemd0:i386 libtasn1-6:i386 libtheora0:i386
  libtiff5:i386 libtinfo6:i386 libudev1:i386 libunistring2:i386
  libusb-1.0-0:i386 libuuid1:i386 libv4l-0:i386 libv4lconvert0:i386
  libvisual-0.4-0:i386 libvorbis0a:i386 libvorbisenc2:i386 libvulkan1:i386
  libwayland-client0:i386 libwayland-cursor0:i386 libwayland-egl1:i386
  libwebp6:i386 libwind0-heimdal:i386 libwrap0:i386 libx11-6:i386
  libx11-xcb1:i386 libxau6:i386 libxcb-dri2-0:i386 libxcb-dri3-0:i386
  libxcb-glx0:i386 libxcb-present0:i386 libxcb-randr0:i386 libxcb-render0:i386
  libxcb-shm0:i386 libxcb-sync1:i386 libxcb-xfixes0:i386 libxcb1:i386
  libxcomposite1:i386 libxcursor1:i386 libxdmcp6:i386 libxext6:i386
  libxfixes3:i386 libxi6:i386 libxinerama1:i386 libxkbcommon0:i386
  libxml2:i386 libxpm4:i386 libxrandr2:i386 libxrender1:i386
  libxshmfence1:i386 libxslt1.1:i386 libxss1:i386 libxxf86vm1:i386
  libzstd1:i386 mesa-vulkan-drivers:i386 ocl-icd-libopencl1
  ocl-icd-libopencl1:i386 wine-stable wine-stable-amd64 wine-stable-i386:i386
  winehq-stable zlib1g:i386
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


## 여기까지 하면 wine 준비가 된거다. 이제 카카오톡 pc 를 설치하면 된다.
