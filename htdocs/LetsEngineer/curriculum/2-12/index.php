<!-- http://localhost/LetsEngineer/curriculum/2-12/index.php -->
<form action="result.php" method="post">
    お名前：<input type="text" name="my_name"/>
    <br>
    ご希望商品
    <input type = "radio" name="Product" value="A賞">A賞
    <input type = "radio" name="Product" value="B賞">B賞
    <input type = "radio" name="Product" value="C賞">C賞
    <br>
    個数：
    <select name = "quantity">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="4">5</option>
        <option value="4">6</option>
        <option value="4">7</option>
        <option value="4">8</option>
        <option value="4">9</option>
        <option value="4">10</option>
    </select>
    <br>
    <input type="submit" value="申し込み" />
    </form>