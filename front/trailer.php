<style>
  .lists *,
  .control * {
    box-sizing:border-box;
  }

.lists{
  width:210px;
  height:260px;
  margin:auto;
  overflow:hidden;
}

/* lists下面的po */
.lists .po{ 
width:100%;
text-align:center;
display:none;
}

.po img,
{
  width:100%;
  border:2px solid white;
}

.controls{
  display:flex;
  margin:auto;
  width:100%;
  align-items:center; /* 垂直居中 */
  justify-content: space-evenly;
}

.icons{
  display:flex;
  width:320px;
  height:110px;
  overflow:hidden;
  font-size: 12px;
  position:relative;
}

.icon{
  width:80px;
  flex-shrink: 0; /* 子元素不改變寬度 */
  padding:5px;

}

.left{
  /* 換頁箭頭 */
  width:50px;
  border-top:20px solid transparent; /* transparent=透明 */
  border-right:25px solid black;
  border-bottom:20px solid transparent;
  /* border-left:10px solid transparent; */
  cursor:pointer;
}

.right{
  width:30px;
  border-top:20px solid transparent;
  /* border-top:10px solid transparent; */
  border-bottom:20px solid transparent;
  border-right:25px solid black;
  cursor:pointer;
}

.left:hover{
  border-right:25px solid #555;
}

.right:hover{
  border-left:25px solid #555;
}
</style>

<div class="half" style="vertical-align:top;">
      <h1>預告片介紹</h1>
      <div class="rb tab" style="width:95%;">
        <div>
          <div class="lists">
            <?php
            $pos=$Poster->all("WHERE `sh` =1 Order By `rank`");
            foreach($pos as $key =>$po){
              echo "<div class='po' >";
              echo "<img src='img/{$po['path']}'>";
              echo "</div>";
            }

            ?>
          </div>

          <div class="controls">
            <div class="left"></div> <!-- 左箭頭 -->
            <div class="icons">
            foreach($pos as $key =>$po){
              echo "<div class='po' >";
              echo "<img src='img/{$po['path']}'>";
              echo "</div>";
            }
            </div>
            <div class="right"></div> <!-- 右箭頭 -->
          </div>

        </div>
      </div>
    </div>

    <script>
    // 只讓第一張poster顯示
    $(".po").eq(0).show(); 
    let i=0;
    let all=$('.po').length;

    let slides=setInterval(() => {
        i++;
        if(i>all-1){
          i=0;
        }
        ani(i);

    },2500); // 每2.5秒換一張圖
    //間隔的時間建議比動畫的時間長

  function ani(n){
  let ani=$(".po").eq(n).date('ani');
  let now=$(".po:visible");
  let next=$(".po").eq(n);

  switch(ani){
    case 1:
      //淡入淡出
      now.fadeOut(1000);
      next.fadeIn(1000);
      break;
      case 2:
      //縮放
      now.hide(1000,function(){
      next.show(1000);
      });
      break;
      case3:
      //滑入滑出
      now.slideUp(1000,function(){
        next.slideDown(1000);
      })
      break;
  }
}

let p=0;
$(".left,.right").on("click",function(){
  if($(this).hasClass('left')){
      if(p-1 >= 0 ){
        p--;
      }
  }else{
    if(p+1<=all-4){ //下一頁時，若小於扣掉現在顯示的4張圖所剩的數量
      p++;
    }
  }
  $("icon").animate({right:p*80},500)
})

$(".icon").on("click",function(){
  clearInterval(slides)
  let idx = $(this).index() //宣告我所點選的圖是在順序中的第幾張
  ani(idx)

  i=idx

  slides=setInterval(() =>{
    i++;
    if(i>all-1){
      i=0;
    }
    ani(i);
    },2500);
})

    </script>