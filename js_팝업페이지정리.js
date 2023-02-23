```js
window.open(URL, 윈도우명, 옵션);
```

 이라고 하면 팝업을 띄울 수 있다. 
 네번재 파라미터도 있는데 네번째 파라미터는 이미 존재하는 창의 이름을 지정할때만 사용하며 브라우저 열어본 페이지 목록에 덮어씌울 것인지 새로 추가할 것인지를 지정한다. 
 기본값인 false는 새로 추가하는 것이다.
 
 ex) window.open("http://blog.outsider.ne.kr", "" , "width=800,height=600,toolba=no");

dependent   부모의 종속된 윈도우를 연다(부모 닫으면 같이 닫힌다.)(no)
directories   개인북마크 or 링크바를 표시(yes)
height          높이(Min 100px)
width            넓이(Min 100px)
top               팝업의 위쪽 위치
left                팝업의 왼쪽 위치
menubar      메뉴바 표시 여부
toolbar         툴바 표시여부
location       주소표시줄 표시 여부
status          하단 상태표시줄 표시여부
resizable     크기변경 여부
scrollbars    스크롤바 표시 여부(내용이 창보다 클 경우)
modal           모달윈도우를 연다
minimizable  윈도 최소화 버튼 추가



window.open()은 해당 윈도우 객체를 리턴한다. 그러므로 팝업을 열고 팝업창을 제어하려면 객체로 받아서 핸들링 해주면 된다.


var popup = window.open("http://blog.outsider.ne.kr", "" , "width=800,height=600,toolba=no");
popup.moveTo(0,0);

moveTo()    창의 좌측 상단 모서리를 지정된 좌표로 이동
moveBy()    창을 지정된 픽셀 수만큼 상하좌우로 이동
resizeTo()  창의 크기를 절대적인 크기로 조절
resizeBy()  창의 크기를 상대적인 크기로 조절
focus()       창을 활성화한다
blur()          포커를스를 잃게 한다.
close()        창을 닫는다.



자신을 닫을 때는 window.close()나 self.close()를 사용하면 된다. 팝업에서 부모창에 접근하려면 opener를 이용하면 된다. 
또한 name프로퍼티를 이용해서 target으로 사용할 수 있다.


* 추신 : popup에 관련해서 몇가지 보안관련 사항들이 있는데 자바스크립트는 자신이 연 창만 다시 닫을수 있고 다른 창을 닫으려면 사용자의 승인이 필요하다. 
보이지 않는 팝업을 띄워서 악의적인 사용을 막기 위해서 너무 작은 크기(보통은 100px미만)로 축소할 수 없고 화면밖으로 이동시킬 수 없다.
