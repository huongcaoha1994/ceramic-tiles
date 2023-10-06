<!DOCTYPE html>
<html>
<head>
  <title>Gọi trang PHP bằng JavaScript</title>
</head>
<body>
    <h1>Filter</h1>
    <label for="filter">gạch đỏ</label>
  <input type="radio" name="filter" value="gạch đỏ" onclick="filter()">
  <br>
  <label for="filter">gạch xanh</label>
  <input type="radio" name="filter" value="gạch xanh" onclick="filter()">
  <br>
  <label for="filter">gạch vàng</label>
  <input type="radio" name="filter" value="gạch vàng" onclick="filter()">
  <br>

  <div id="result"></div>

  <script>
    function filter() {
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          document.getElementById("result").innerHTML = xhr.responseText;
        }
      };
      xhr.open("GET", "demo-onclick.php", true);
      xhr.send();
    }
  </script>
</body>
</html>