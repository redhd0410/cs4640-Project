// $(function() {
//     $('input[name="datetimes"]').daterangepicker({
//       timePicker: true,
//       startDate: moment().startOf('hour'),
//       endDate: moment().startOf('hour').add(32, 'hour'),
//       locale: {
//         format: 'M/DD hh:mm A'
//       }
//     });
//   });

$(function() {

  $('input[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
      opens: 'center',
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });
  
});

function submit_confirm() {
    var title = document.getElementById("event_title").value;
    var event_desc = document.getElementById("event_desc").value;
    var date = document.getElementById('calendar').value;
    // alert(date);
    return validation(title, event_desc);
}