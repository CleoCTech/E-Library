<script>
// $(document).ready(function() {
//             $('#main_skill').on('change', function() {
//                     alert("clicked");
//                     console.log("changed");
//                     var skillID = $(this).val();
//                     if (skillID) {
//                         $.ajax({
//                             type: 'POST',
//                             url: 'skills_helper.php',
//                             data: 'skill_id=' + skillID,
//                             success: function(data) {
//                                 console.log("success");
//                                 console.log(data);
//                                 $('#sub_skill').html(html);
//                             }
//                         });
//                     } else {
//                         console.log("fail");
//                         $('#sub_skill').html('<option value="">Select main skill first</option>');
//                     }
//                 }
//             });
$(document).ready(function() {
    //your code here
    $('#sel1').on('change', function() {
        console.log("changed");

        if (condition) {
            $.ajax({});
        } else {

        }

    });
});
</script>
