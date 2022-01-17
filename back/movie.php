<button onclick="location.href='?do=add_movie'">新增電影</button>
<hr>
<div style="overflow:auto;"></div>
<?php
$mos=$Movie->all("ORDER BY rank");
foreach($mos as $key =>$movie){
    ?>


<div style="display:flex;width:100%">
<div style="width:15%">
    <img src="img/<?=$movie['poster'];?>" style="width:100%">
</div>

<div>
    分級:
    <img src="icon/<?=$movie['level'];?>.png">
</div>

<div>
    <div style="display:flex">
        <div style="width:33%">片名:</div>
        <div style="width:33%">片長:</div>
        <div style="width:33%">上映時間:</div>
    </div>

    <div style="text-align:right">
        <button claa="show" data-id="<?=$movie['id']?>">
        <?=($movie['sh']==1)?"顯示":"隱藏"?>
    </button>
        <button class="sw">往上</button>
        <button class="sw">往下</button>
        <button onclick="location.href='?do=edit_movie&id='">編輯電影</button>
        <button>刪除電影</button>
    </div>

    <div>
        劇情介紹:<?=$movie['intro'];?>
    </div>
</div>



</div>
<hr>
<?php
}
?>

<script>
// 寫法一:
    $(".show").on("click",function(){
        let id=$(this).data("id");
        $.post("api/show.php",{id},()=>{
            location.reload();
        })

// 寫法二:
$(".show").on("click",(e)=>{
    // console.log...
    let id=$(e.target).data("id");
    $.post("api/show.php",{id},()=>{
        location.reload();
    })
})
// 寫法三:
$(".show").on("click",function(e){
    
    })

    })
</script>