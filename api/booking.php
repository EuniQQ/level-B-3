<?php include_once "../base.php";

$movie=$Movie->find($_GET['id']);
$date=$_GET['date'];
$session=$ss[$_GET['session']];
?>

<style>
    #seats{
        
        display:flex;
        flex-wrap:wrap;
        width:540px;
        height:370px;
        padding:19px 112px 12px 112px;
        margin:auto;
        /* background:url('icon/03D04.png'); */
        box-sizing: border-box;
    }

    .seat{
    width:63px;
    height:85px;
    position:relative;

    }

    .null{
        background:url('icon/03D02.png');
        background-position:center;
        background-repeat:no-repeat;
    }

    .check{
        position:absolute;
        right:5px;
        bottom:5px;
    }
</style>

<div id="seats" >
<?php
for($i=0;$i<20;$i++){
    echo "<div class='seat'>";
    echo "<div class='ct'>";
    echo (floor($i/5)+1)."排";
    echo "</div>";
    echo "<inpu type='checkbox' name='check' class='check' value='$i'></inpu>";
    echo "</div>";
}
?>
</div>

<div style="width:540px;margin:auto;">
    <div>您選擇的電影是:</div>
    <div>您選擇的時刻是:</div>
    <div>您已經勾選了<span id="tickets"></span>張票，最多可以購買四張票</div>
    <div>
        <button onclick="prev()">回上一步</button>
        <button>完成訂購</button>
    </div>
</div>

<script>
    let seats=new Array();

    $(".check").on('click',function(){
        if($(this).prop('checked')){
            if(seats.lengh<4){
                seat.push($(this).val())
            }
            }else{
                seats.splice(seats.indexOf($(this).val()),1)
            }
            $("#tickets").text(seats.length)
        
    })

    function order(){
        let order={id:$("#movie").val(),
                date:$("#date"),
                session:$("#session"),
                seats}


    }
</script>