<div class="form-group mb-3">
    <label for="parent_category">Select Parent Option:</label>
    <select id="parent_category">
        <option value="">-- Select --</option>
        <option value="1">Wall tiles</option>
        <option value="2">Floor tiles</option>
        <option value="3">Special</option>
    </select>

    <label for="child_category">Select Child Option:</label>
    <select id="child_category">
        <option value="">-- Select --</option>
    </select>
</div>

<script>
    // Lấy các đối tượng select từ DOM
    var parentSelect = document.getElementById("parent_category");
    var childSelect = document.getElementById("child_category");

    // Định nghĩa các giá trị tương ứng của select option con
    var childOptions = {
        "1": [
            { display: "bathroom", value: "1" },
            { display: "kitchen", value: "2" },
            { display: "outdoor", value: "3" },
            { display: "living room", value: "4" },
            { display: "bedroom", value: "5" },
            { display: "commercial space", value: "6" }
        ],
        "2": [
            { display: "bathroom", value: "1" },
            { display: "kitchen", value: "2" },
            { display: "outdoor", value: "3" },
            { display: "living room", value: "4" },
            { display: "bedroom", value: "5" },
            { display: "commercial space", value: "6" }
        ],
        "3": [
            { display: "germ free", value: "1" },
            { display: "tac", value: "2" },
            { display: "anti static", value: "3" },
            { display: "cool roof", value: "4" }
        ]
    };

    // Xử lý sự kiện onchange
    parentSelect.onchange = function() {
        var selectedValue = parentSelect.value;
        childSelect.innerHTML = ""; // Xóa tất cả các option cũ

        if (selectedValue !== "") {
            var options = childOptions[selectedValue];

            // Tạo các option mới cho select option con
            for (var i = 0; i < options.length; i++) {
                var option = document.createElement("option");
                option.text = options[i].display;
                option.value = options[i].value;
                childSelect.appendChild(option);
            }
        }
    };
</script>