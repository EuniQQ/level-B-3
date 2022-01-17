<h3 class="ct">新增院線片</h3>
<form action="api.add_movie.php" method="post" enctype=""></form>
<div >影片資料</div>
<div>
    <label>片名：</label>
    <input type="text"  name="name">
</div>
<div>
    <label>分級：</label>
    <select name="level" >
        <option value="1">普遍級</option>
        <option value="2">保護級</option>
        <option value="3">輔導級</option>
        <option value="4">限制級</option>
        </select>(請選擇級別)
</div>
<div>
    <label>片長：</label>
    <input type="number"  name="length">
</div>
<div>
    <label>上映日期：</label>
    <select name="year" id="">
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
    </select>年

    <select name="month" id="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>月

    <select name="" id="">
<?php


?>
    </select>日
</div>
<div>
    <label>發行商：</label>
    <input type="text"  name="publish">
</div>
<div>
    <label>導演：</label>
    <input type="text"  name="director">
</div>
<div>
    <label>預告影片：</label>
    <input type="file"  name="trailer">
</div>
<div>
    <label>電影海報：</label>
    <input type="file"  name="poster">
</div>

<div style="display:flex">
<div>劇情簡介</div>
<div>
    <textarea name="intro" style="width:99%"></textarea>
</div>
</div>
<div class="ct">
    <input type="submit" value="新增">  
    <input type="reset" value="重置">  
</div>