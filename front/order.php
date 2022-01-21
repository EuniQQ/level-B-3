<h3 class="ct">線上訂票</h3>
<style>
    #order{
        width:50%;
        margin:auto;
    }
    .row{
        display:flex;
        width:100%;
    }
    .row .first{
        width:15%;
        text-align: right;
    }
    .row .sec{
        width:85%;
        text-align: left;
    }

    .sec select {
        width:100%;
    }

    </style>


<div id="order">
<div class="row">
    <div class="first">電影：</div>
    <div class="sec"><select name="movie" id="movie"></select></div>
</div>
<div class="row">
    <div class="first">日期：</div>
    <div class="sec"><select name="date" id="date"></select></div>
</div>
<div class="row">
    <div class="first">場次：</div>
    <div class="sec"><select name="session" id="session"></select></div>
</div>
</div>
<div class="row" >
    <div class="ct" style="width:100%">
        <button onclick="booking()">確定</button>
        <button onclick="reset()">重置</button>
    </div>

</div>

<div  id="booking" style="display:none">劃位</div>

<script>
let id=(new URL(location)).searchParams.get('id');
getMovies(id)

function booking(){
    $("#order,#booking").toggle()
    $("$booking").html()


}

function getMovies(id){
    $.get("api/get_movies.php",{id},
    (movies)=>{
        $("#movie").html
    })
    }
    
    $get("api/get_movies.php",(movies)=>{
        $("#movie").html(movies)
    })




</script>