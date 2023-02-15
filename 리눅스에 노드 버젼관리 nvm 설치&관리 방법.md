### 리눅스에 node.Js 버전관리 프로그램은 nvm 설치하고 관리하는 방법


$ curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.36.0/install.sh | bash
$ source ~/.bashrc  // nvm 명령을 사용하기 위한 설치

$ vim ~/.bashrc
$ export NVM_DIR="$HOME/.nvm"
$ -s "$NVM_DIR/nvm.sh" ] && . "$NVM_DIR/nvm.sh" # This loads nvm // 명령 실행이 안되는 경우 확인.

$ nvm current // 현재 사용중인 버전 확인하기

$ nvm ls 
$ nvm ls-remote  // 설치된 node 목록

$ nvm install node // 최신 버젼의 노드 설치
$ nvm install --lts // LTS 최신버젼 설치

$ nvm use (version) // 특정버전의 node 사용

$ nvm alias default node // 설치되어 있는 가장 최신버전의 node를 디폴트.

$ which node // 노드 설치경로 확인

$ node -v // 설치된 node가 잘 작동되는지 확인

$ nvm uninstall 8.9.4 // 필요없는 node버전 삭제




## 참고 사이트
- https://tutorialpost.apptilus.com/code/posts/nodejs/nvm-for-node-version-manager/
- https://songjang.tistory.com/105?category=1194647
- https://nodejs-style.selfhow.com/post/?id=5724
- bash : nvm: command not found 해결:  https://liveloper-jay.tistory.com/94
