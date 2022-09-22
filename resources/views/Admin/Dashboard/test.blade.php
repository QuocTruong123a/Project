<!DOCTYPE html>
<html>
  <head>
    <title>Get selected option value</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="main.js" defer></script>
  </head>
  <body>
   <select name="sample" class="dropdown "  onchange="updateMoth(this)">
                <option  class="date" value="date">Ngày</option>
                <option value="week">tuần</option>
                <option value="Year">Tháng</option>
            </select>

            <table class="  ">
            <tr  class=" ">
          <th>Mã thiêt bị</th>
        </tr>
          <tr  class=" ">

            <td id="show_message">

             </td>
        </th>

        </tr>
            </table>
    <script>

 function updateMoth(month) {
    var message = document.getElementById('show_message');
    var value = month.value;
    if (value === 'date') {
        message.innerHTML = "  <li><span>{{  $test }}</span></li>";
    } else if (value === 'week') {
        message.innerHTML = "Bảng thống kê theo tuần";
    } else if (value === 'Year') {
        message.innerHTML = "Bảng thống kê theo tháng";
    }
    }

</script>
  </body>
</html>
