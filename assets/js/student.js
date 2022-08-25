$(document).ready(function() {
       $.ajax({
          url: "api/api.php", //the page containing php script
          type: "post", //request type,
          data: {
                'req': '1',
                'param': '1',
              },
        dataType: "json",
        success: function(result) {
        $("#dept").html(result);
        }
        });

        $.ajax({
               url: "api/api.php", //the page containing php script
               type: "post", //request type,
               data: {
                  'req': '2',
                  'param': '2',
                  'get': 'name'
               },
               dataType: "json",
               success: function(result) {
                  $("#section").html(result);
               }
        });

          $.ajax({
          url:"api/api.php", //the page containing php script
          type: "POST", //request type,
          data: {'req': '1', 'param':'4'},
          dataType:"json",
          success:function(result)
          { 
            $("#student_data").html(result);
          }
          });

         $('#dept').on('change', function() {
         var dept = $(this).val();
         $.ajax({
            type: 'POST',
            url: 'api/api.php',
            data: {
               'req': '2',
               'param': '3',
               'filter': 'dept_id = ' + dept
            },
            dataType: "json",
            success: function(result) {
               $('#section').html(result);
            }
         });

      });


     $('#add_student').submit(function (event)
     {
         event.preventDefault();
         $.ajax({
             data: $('form').serialize(),
             url:"controller/insert_student.php", //php page URL where we post this data to save in database
             type: 'POST',
             success: function (result) {
                 alert('Success');
                $.ajax({
                  url:"api/api.php", //the page containing php script
                  type: "POST", //request type,
                  data: {'req': '3', 'param':'4'},
                  dataType:"json",
                  success:function(result)
                  { 
                    $("#student_data").html(result);
                  }
                  });
             }
         });
         $("#add_student")[0].reset();
        
     });


    });


