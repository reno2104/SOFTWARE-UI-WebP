## 이유: 브라우저가 캐쉬를 사용할 때 적재된 JS나 CSS 파일 내용으로 계속 처리가 되기 때문.

- CSS 적용:

< link rel="stylesheet" type="text/css" href="http://localhost/style.css?ver=1">


- 버전 정보를 파일명(text/css) 뒤에 추가함으로서 브라우저가 기존 url과 다른 url인지 인식한 후 캐쉬된 파일 대신에 쿼리스트링이 추가된 css 파일을 사용하게 된다. 
- *ver=숫자; 여기서 숫자는 아무 숫자를 사용해도 상관 없다. 
- 특히나 내 pc에서 확인했을 때 수정 내용이 반영되었다고 해도 다른 pc에서 반영되었다는 보장이 없기 때문에 필수로 해야하는 작업이라고 할 수 있다. 


- JS 적용: 

<script type="text/javascript" src="./style/js/test.js?ver=1"></script>



## 
