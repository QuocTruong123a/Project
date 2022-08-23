<script src="Backend/node_modules/jquery/dist/jquery.min.js"></script>
<script src="Backend/node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="Backend/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="Backend/node_modules/chart.js/dist/Chart.min.js"></script>
<script src="Backend/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
<script src="Backend/https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
<script src="Backend/js/off-canvas.js"></script>
<script src="Backend/js/hoverable-collapse.js"></script>
<script src="Backend/js/misc.js"></script>
<script src="Backend/js/chart.js"></script>
<script src="Backend/js/maps.js"></script>
<script src="Backend/js/jsnav.js"></script>
<script src="Backend/js/chartjs.js"></script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
<script src="Calendar/dist/jquery.simple-calendar.js"></script>
<script>
  var $calendar;
  $(document).ready(function () {
    let container = $("#container").simpleCalendar({
      fixedStartDay: 0, // begin weeks by sunday
      disableEmptyDetails: true,
      events: [
        // generate new event after tomorrow for one hour
        {
          startDate: new Date(new Date().setHours(new Date().getHours() + 24)).toDateString(),
          endDate: new Date(new Date().setHours(new Date().getHours() + 25)).toISOString(),
          summary: 'Visit of the Eiffel Tower'
        },
        // generate new event for yesterday at noon
        {
          startDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 12, 0)).toISOString(),
          endDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 11)).getTime(),
          summary: 'Restaurant'
        },
        // generate new event for the last two days
        {
          startDate: new Date(new Date().setHours(new Date().getHours() - 48)).toISOString(),
          endDate: new Date(new Date().setHours(new Date().getHours() - 24)).getTime(),
          summary: 'Visit of the Louvre'
        }
      ],

    });
    $calendar = container.data('plugin_simpleCalendar')
  });
</script>
<script language="javascript">

</script>


<script src="Backend/text.js"></script>
<script src="Backend/css/option/text.js"></script>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script >
    $(function(){
      $(".tags_select_choose").select2({
         tags:true,
         tokenSeparators:[',']

   });
        $(".select2_init").select2({
            placeholder: "chọn danh mục",
    allowClear: true
   })
    })
</script>
<strong><script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script></strong>
<script>const dateControl = document.querySelector('input[type="date"]');
    dateControl.value = Date;</script>

