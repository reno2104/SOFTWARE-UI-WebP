<?php  
	include "/db.php";
	include "../password.php";
 include_once "php.ini";

	// session_start();
	$_SESSION['insertID'] = $member["id"];
	$_SESSION['insertPW'] = $member["pw1"];
	
?>

<!-- <php
include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php";

$query="select * from category where step=1";
$result = $mysqli->query($query) or die("query error => ".$mysqli->error);
while($rs = $result->fetch_object()){
    $cate1[]=$rs;
}

?> -->
<html>
 <head>
<style>
    .thst{
        text-align: center;
    vertical-align: middle;
    }

    .textarea{
     height:100px;
    }
</style>

<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

<!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js) -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>

<!-- include summernote css/js-->
<link href="summernote.css">
<script src="summernote.js"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>

        <div style="text-align:center;padding:20px;"><H3>제품등록하기</H3></div>
        <table class="table table-sm table-bordered">
          <tbody>
            <form method="post" action="productUpload_ok.php" enctype="multipart/form-data">
            <!-- <form method="post" action="imageTest.php" enctype="multipart/form-data"> -->
            <!-- <input type="hidden" name="file_table_id" id="file_table_id" value=""> -->
          <tr>
            <!-- <th scope="row" class="thst">카테고리선택</th> -->
            <!-- <td>
            <div class="row g-3">
                <div class="col-md-4">
                    <select class="form-select" name="cate1" id="cate1" aria-label="Default select example">
                        <option value="">대분류</option>
                        <php
                            foreach($cate1 as $c){
                        ?>
                            <option value="<php echo $c->code;?>"><php echo $c->name;?></option>
                        <php ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-select" name="cate2" id="cate2" aria-label="Default select example">
                        <option value="">중분류</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-select" name="cate3" id="cate3" aria-label="Default select example">
                        <option value="">소분류</option>
                    </select>
                </div> 
            </div>
            </td> -->
           
          </tr>
          <tr>
            <th scope="row" class="thst">제품명</th>
            <td><input type="text" class="form-control" name="pname" id="name"></td>
          </tr>
          <tr>
            <th scope="row" class="thst">글쓴이 </th></th>
            <td><input type="text" class="form-control" name="wname" id="price"></td>
          </tr>
          <tr>
            <th scope="row" class="thst">가격</th>
            <td><input type="number" class="form-control" name="price" id="price" onkeyup="numberWithCommas(x)"></td>
          </tr>
          <!-- <tr>
            <th scope="row" class="thst">전시옵션</th>
            <td>
            <input class="form-check-input" type="checkbox" name="ismain" id="ismain" value="1">메인&nbsp;
            <input class="form-check-input" type="checkbox" name="isnew" id="isnew" value="1">신제품&nbsp;
            <input class="form-check-input" type="checkbox" name="isbest" id="isbest" value="1">베스트&nbsp;
            <input class="form-check-input" type="checkbox" name="isrecom" id="isrecom" value="1">추천&nbsp;
            </td>
          </tr> -->
          <tr>
            <!-- <th scope="row" class="thst">위치지정</th> -->
            <!-- <td>
                <select class="form-select" name="locate" id="locate" aria-label="Default select example">
                    <option value="0">지정안함</option>
                    <option value="1">1번위치</option>
                    <option value="2">2번위치</option>
                </select>
            </td> -->
          </tr>
          <tr>
            <!-- <th scope="row" class="thst">판<input type="file" class="form-control" name="mainimg" id="thumbnail">매종료일</th>
            <td>
                <input type="text" class="form-control" style="width: 272px;" name="sale_end_date" id="sale_end_date" value="<?php echo date("Y-m-d",strtotime("+6 month"))?>">
            </td> -->
          </tr>
          <tr>
            <th scope="row" class="thst">메인이미지</th>
            <td><input type="file" class="form-control" name="myfile" id="thumbnail"></td>
          </tr>
          <tr>
            <th scope="row" class="thst">제품상세설명</th>
            <td>
            <textarea class="form-control textarea" name="content"></textarea>
                <!-- <div id="summernote" name="content"></div> -->
            </td>
          </tr>

          <!-- <tr>
            <th scope="row" class="thst">상세이미지</th>
            <td><input type="file" class="form-control" name="thumbnail" id="thumbnail"></td>
          </tr> -->
          <!-- <tr>
            <th scope="row" class="thst">파일 업로드</th>
            <td>
                <input type="file" multiple name="upfile[]" id="upfile" style="display:none;">
                <div id="target_file_wrap">
                    <a href="#" onclick="jQuery('#upfile').click()" class="btn btn-primary">이미지선택</a>
                </div>                    
                <div class="row row-cols-1 row-cols-md-6 g-4" id="imageArea">
                </div>
            </td>
          </tr> -->
          <!-- <tr>
            <th scope="row" class="thst">옵션</th>
            <td></td>
          </tr>
          -->
          </tbody>
        </table>
       
        <button class="btn btn-primary" type="submit">등록완료</button>
        <button class="btn btn-primary" onclick="history.back();">이전화면으로</button>
</form>

</body>


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>

    $(function(){
        $('#summernote').summernote({
            height: 300
        });
        $("#sale_end_date").datepicker({ dateFormat: 'yy-mm-dd' });
    });

    $("#cate1").change(function(){
        var cate1 = $("#cate1 option:selected").val();
       
        var data = {
            cate1 : cate1
        };
            $.ajax({
                async : false ,
                type : 'post' ,
                url : 'category2.php' ,
                data  : data ,
                dataType : 'html' ,
                error : function() {} ,
                success : function(return_data) {
                    $("#cate2").html(return_data);
                }
        });
    });

    $("#cate2").change(function(){
        var cate2 = $("#cate2 option:selected").val();
       
        var data = {
            cate2 : cate2
        };
            $.ajax({
                async : false ,
                type : 'post' ,
                url : 'category3.php' ,
                data  : data ,
                dataType : 'html' ,
                error : function() {} ,
                success : function(return_data) {
                    $("#cate3").html(return_data);
                }
        });
    });  

    $("#upfile").change(function(){

        var files = $('#upfile').prop('files');
        for(var i=0; i < files.length; i++) {
            attachFile(files[i]);
        }

        $('#upfile').val('');

    });  

    function attachFile(file) {
    var formData = new FormData();
    formData.append("savefile", file);
    $.ajax({
        url: 'product_save_image.php',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        dataType : 'json' ,
        type: 'POST',
        success: function (return_data) {
            if(return_data.result=="member"){
                alert('로그인 하십시오.');
                return;
            }else if(return_data.result=="size"){
                alert('10메가 이하만 첨부할 수 있습니다.');
                return;
            }else if(return_data.result=="image"){
                alert('이미지 파일만 첨부할 수 있습니다.');
                return;
            }else if(return_data.result=="error"){
                alert('첨부하지 못했습니다. 관리자에게 문의하십시오.');
                return;
            }else{
                imgid = $("#file_table_id").val() + return_data.imgid + ",";
                $("#file_table_id").val(imgid);
                var html = "<div class='col' id='f_"+return_data.imgid+"'><div class='card h-100'><img src='/pdata/"+return_data.savename+"' class='card-img-top'><div class='card-body'><button type='button' class='btn btn-warning' onclick='file_del("+return_data.imgid+")'>삭제</button></div></div></div>";
                $("#imageArea").append(html);
            }
        }
    });

    }

    function file_del(imgid){

        if(!confirm('삭제하시겠습니까?')){
        return false;
        }
           
        var data = {
            imgid : imgid
        };
            $.ajax({
                async : false ,
                type : 'post' ,
                url : 'image_delete.php' ,
                data  : data ,
                dataType : 'json' ,
                error : function() {} ,
                success : function(return_data) {
                    if(return_data.result=="member"){
                        alert('로그인 하십시오.');
                        return;
                    }else if(return_data.result=="my"){
                        alert('본인이 작성한 제품의 이미지만 삭제할 수 있습니다.');
                        return;
                    }else if(return_data.result=="no"){
                        alert('삭제하지 못했습니다. 관리자에게 문의하십시오.');
                        return;
                    }else{
                        $("#f_"+imgid).hide();
                    }
                }
        });

        }

								function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
}

</script>    

</html>
<!-- <php
include $_SERVER["DOCUMENT_ROOT"]."/inc/footer.php";
?> -->

<!-- https://zetawiki.com/wiki/PHP_%ED%8C%8C%EC%9D%BC_%EC%97%85%EB%A1%9C%EB%93%9C_%EA%B5%AC%ED%98%84 -->
