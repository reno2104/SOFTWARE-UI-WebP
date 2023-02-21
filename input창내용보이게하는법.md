## placeholder / onfocus / onblur 이 세가지를 기억하라!
----

- <예시>
```
  <input class="gSearch" type="search" size="60" placeholder="Google 검색 및 URL 입력" onfocus="this.placeholder=''" onblur="this.placeholder='Google 검색 및 URL 입력'" name="search">
```

- <설명>

```
  placeholder="Google 검색 및 URL 입력" ▶ 큰 따옴표 안의 문구가 표시됨
  
  onfocus="this.placeholder=''" ▶ 클릭했을 때, placeholder 의 문구를 사라지게 함
  
  onblur="this.placeholder='Google 검색 및 URL 입력'" ▶ input 창을 제외한 다른곳을 클릭했을 때, 작은 따옴표 안의 글씨가 다시 출력됨
``` 
