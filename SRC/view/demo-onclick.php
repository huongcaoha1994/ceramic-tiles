<!DOCTYPE html>
<html>
<head>
  <title>Radio Button Example</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    function submitForm(color) {
      $.ajax({
        url: "filter-color.php",
        type: "POST",
        data: { color: color },
        success: function(response) {
          $("#response-container").text(response); // Cập nhật phần tử HTML để hiển thị phản hồi
        },
        
        error: function(jqXHR, textStatus, errorThrown) {
          console.error("Error:", textStatus, errorThrown);
        }
      });
      var data = JSON.parse(response);
      data.forEach(function(item) {
        var img = $("<img>").attr("src", item.imageSrc);
        var h3 = $("<h3>").text(item.title);
        var h4 = $("<h4>").text(item.additionalInfo);
        var div = $("<div>").append(img, h3, h4);

        // Thêm phần tử vào container
        $("#response-container").append(div);
      });
    }
  </script>
</head>
<body>
  <h2>Ví dụ về nút radio</h2>

  <input type="radio" name="color" value="black" onclick="submitForm('black')" />
  <input type="radio" name="color" value="white" onclick="submitForm('white')" />

  <div id="response-container"></div> <!-- Phần tử HTML để hiển thị phản hồi -->

</body>
</html>


