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

.po img{
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
  height:90px;
}

.icon{
  width:80px;
  height:20px;
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
              echo "<div>";
              echo "<img src='img/{$po['path']}'>";
              echo "</div>";
            }

            ?>
          </div>

          <div class="controls">
            <div class="left"></div> <!-- 左箭頭 -->
            <div class="icons">
              <div class="icons">sss</div>
              <div class="icons">sss</div>
              <div class="icons">sss</div>
              <div class="icons">sss</div>
            </div>
            <div class="right"></div> <!-- 右箭頭 -->
          </div>

        </div>
      </div>
    </div>

    <script>
      // 只讓第一張poster顯示
      $(".po").eq(0).show(); 
    </script>