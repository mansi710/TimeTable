<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <title>Time Table Generator</title>
</head>

<body>
    <div class="mb-3 row">
        <div class="col-sm-5">
            <h2>Time Table Generator</h2>
        </div>
    </div>
    <!-- <form id="generateForm"> -->
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Number Of Working Days</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="days" min="1" max="7" name="days" onkeyup="countTotalHours()" placeholder="Enter number of working  days">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Number Of Subject Per Day</label>
        <div class="col-sm-5">
            <input type="number" name="subject" class="form-control" min="1" max="8" id="subject" onkeyup="countTotalHours()" placeholder="Enter number of subject per day">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Total Subjects</label>
        <div class="col-sm-5">
            <input type="number" name="total" class="form-control" min="1" id="total" placeholder="Enter  Total Subjects">
        </div>
        <h2>Total Hours:<p id="demo"></p>
        </h2>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-5">
            <button type="submit" id="btnAdd" class="btn btn-primary mb-3">Generate New Form</button>
        </div>
    </div>
    <!-- </form> -->
    <!-- <div>
        <select id="CreateDiv">
            <option value="0"> Select</option>
            <option value="1"> One</option>
            <option value="2"> Two</option>
            <option value="3"> There</option>
            <option value="4"> Four</option>
            <option value="5"> Five</option>
        </select>
    </div>
    <br />
    <br />
    <div id="html2" style="text-align:center">
    </div> -->
    <div id="addForm"></div>
    <div id="tableDiv"></div>
</body>
<script>
    function countTotalHours() {
        var workingDays = document.getElementById("days").value;
        var subjectPerDay = document.getElementById("subject").value;
        var totalHours = workingDays * subjectPerDay;
        document.getElementById("demo").innerHTML = totalHours;
    }
    // $(document).ready(function() {
    //     var container = $("#html2");
    //     $("#CreateDiv").change(function() {
    //         $('#html2').html('');

    //         var strBlocksHTML = '';


    //         var selectedvalue = $("#CreateDiv").val();
    //         alert(selectedvalue);
    //         for (var i = 0; i <= selectedvalue; i++) {
    //             for (var n = 0; n < i; n++) {
    //                 alert(n);
    //                 strBlocksHTML += '<div id="pdfDiv" style=" background-color:red;  display:inline-block;   width:50px;      height:50px;       margin:2px 5px;     border:2px solid #ccc;">  </div>';

    //             }
    //             strBlocksHTML += '<div></div>';
    //         }
    //         $('#html2').append(strBlocksHTML);
    //     })

    // });
    $(document).ready(function() {
        var container = $("#addForm");
        $("#btnAdd").click(function() {
            $('#addForm').html('');
            var strBlocksHTML = '';
            var formCount = $("#total").val();
            alert(formCount);
            for (var i = 1; i <= formCount; i++) {
                strBlocksHTML += '<div class="mb-3 row"> <div class="col"><input type="text" class="form-control" placeholder="Enter Subject"></div>  <div class="col"><input type="text" class="form-control" placeholder="Enter Hours"></div></div>';
            }
            strBlocksHTML += '<div><div class="mb-3 row"><div class="col-sm-5"><button type="submit" id="generateTimeTable"  class="btn btn-primary mb-3">Generate Time Table</button></div></div></div>';
            $('#addForm').append(strBlocksHTML);
        });

        //generate time table
        $("generateTimeTable").click(function(){

            var workingDays = document.getElementById("days").value;
        var subjectPerDay = document.getElementById("subject").value;
        //   var number_of_rows = $('#rows').val();
        //   var number_of_cols = $('#cols').val();
          var table_body = '<table border="1">';
          for(var i=0;i<workingDays;i++){
            table_body+='<tr>';
            for(var j=0;j<subjectPerDay;j++){
                table_body +='<td>';
                table_body +='Table data';
                table_body +='</td>';
            }
            table_body+='</tr>';
          }
            table_body+='</table>';
           $('#tableDiv').html(table_body);
        });
    });

    function generateTimeTable() {
        alert('hey inside time table');
        var workingDays = document.getElementById("days").value;
        var subjectPerDay = document.getElementById("subject").value;
        for (var r = 0; r < workingDays; r++) {
            var tr = $('<tr>');
            for (var c = 0; c < subjectPerDay; c++)
            alert(c);
                $('<td>some value</td>').appendTo(tr); //fill in your cells with something meaningful here
            tr.appendTo(table);
        }
        // var totalRows=subjectPerDay/workingDays;
        // alert(totalRows);
    }
</script>

</html>