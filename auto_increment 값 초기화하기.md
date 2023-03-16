[MySQL] auto_increment 값 초기화하기

[쿼리문]

```sql
ALTER TABLE test1 AUTO_INCREMENT = 1;
SET @COUNT =0;
UPDATE test1 SET AUTO_INCREMENT IDX = @COUNT:=@COUNT+1;
```
