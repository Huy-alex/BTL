<style>
    .form-group span{
        color:red;
    }
    </style>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><?= $data['title']?></h3>
            <a class="btn btn-primary" href="<?=base?>admin/showproduct">Trở Về</a>
                <h4 class="text-success"><?php if(isset($data["addsuccess"])){echo $data["addsuccess"];} ?></h4>
                <h6 class="text-danger"><?php if($data["notifi"] != null){NotificationRight("Vui Lòng điền đẩy đủ thông tin","top-end");}?> </h6>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="x_content">
        <form class="" action="" method="post" novalidate enctype="multipart/form-data">
            <div class="row" >
                <div class="col-5">
                    <div class="form-group">
                        <label for="">Tên Sản Phẩm <span>*</span></label>
                        <input id="name" type="text" class="form-control" name="product[name]">                   
                    </div>
                  
                    <div class="form-group">
                        <label for="">Chọn Danh Mục Sản Phẩm<span>*</span></label>
                        <select class="form-control" name="product[id_category]">
                            <option value="true">-----Chọn Danh Mục Sản Phẩm-----</option>
                            <?php foreach($data["data"] as $key=>$values){?>
                            <option value="<?=$values["id"]?>"><?=$values["name"]?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- <div class="form-group">
                        <label for="">Nhà Sản Xuất <span>*</span></label>
                        <input id="name" type="text" class="form-control" name="product[company]">
                    </div> -->
                     <!-- <div class="col-2"> -->
                    <div class="form-group">
                        <label for="">Hình Ảnh <span>*</span></label>
                        <h6 class="text-danger"><?php if(isset($data["notifi"]["img"])){echo $data["notifi"]["img"];}?> </h6>
                        <input id="name" type="file" accept=".jpg, .png" class="" name="img">
                    </div>
                <!-- </div> -->
                </div>
                <!-- trong row chứa col , trong col chứa dc row -->
                <!-- col từ 1 -> 12 -->
                <div class="col-2">
                    <div class="form-group">
                        <label for="">Giá Sản Phẩm <span>*</span></label>
                        <input id="" type="number" class="quantity" class="form-control" name="product[price]">
                        <span class="span-quantity"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Giảm Giá <span>*</span></label>
                        <h6 class="text-danger"><?php if(isset($data["notifi"]["sale"])){}?> </h6>
                        <input id="name" type="number"  class="quantity" class="form-control" name="product[sale]" placeholder="%">
                        <span class="span-quantity"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Số Lượng <span>*</span></label>
                        <input id="name" class="quantity" type="number" min = "0" class="form-control" name="product[quantity]">
                        <span class="span-quantity"></span>
                    </div>
                </div>
              
                <div class="col-7">
                    <div class="form-group">
                        <label for="">Mô Tả</label>
                        <textarea style="height: 100px;" id="name" type="text" class="form-control" name="product[decs]"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" name="submit">Thêm Sản Phẩm</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
var a =document.querySelectorAll('.quantity');
var span = document.querySelectorAll('.span-quantity');
a[0].onblur=function(e){
    if(e.target.value <0 || e.target.value==""){
    span[0].innerHTML="Vui long chon sl lon hon 0";
    }
    else{
        span[0].innerHTML="";
    }
}
a[1].onblur=function(e){
    if(e.target.value <0 || e.target.value==""){
    span[1].innerHTML="Vui long chon sl lon hon 0";
    }
    else{
        span[1].innerHTML="";
    }
}
a[2].onblur=function(e){
    if(e.target.value <0 || e.target.value=="") {
    span[2].innerHTML="Vui long chon sl lon hon 0";
    }
    else{
        span[2].innerHTML="";
    }
}

</script>
