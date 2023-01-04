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
            <input type="number" class="form-control" id="days" min="1" max="7" name="days" onkeyup="countTotalHours()" placeholder="Enter number of working  days">
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
    <div id="addForm"></div>
    <div id="tableDiv"></div>
</body>
<script>
    function countTotalHours() {
        var workingDays = document.getElementById("days").value;
        var convertIntWorkingDays = parseInt(workingDays);

        if (convertIntWorkingDays < 1 || convertIntWorkingDays > 7) {
            alert('Number must be between 1 to 7 ');
            var workingDays = '';
            return workingDays;
        }
        var subjectPerDay = document.getElementById("subject").value;
        var convertIntSubjectPErDay = parseInt(subjectPerDay);
        if (convertIntSubjectPErDay < 1 || convertIntSubjectPErDay > 9) {
            alert('Number must be between 1 to 9 ');
            var subjectPerDay = '';
            return subjectPerDay;
        }
        var totalHours = workingDays * subjectPerDay;
        document.getElementById("demo").innerHTML = totalHours;
    }
    $(document).ready(function() {
        var container = $("#addForm");
        $("#btnAdd").click(function() {
            $('#addForm').html('');
            var strBlocksHTML = '';
            var formCount = $("#total").val();
            for (var i = 1; i <= formCount; i++) {
                strBlocksHTML += '<div class="mb-3 row"> <div class="col"><input type="number" id="tableSubject"  min=1 class="form-control" placeholder="Enter Subject"></div>  <div class="col"><input type="text" class="form-control" placeholder="Enter Hours"></div></div>';
            }
            strBlocksHTML += '<div><div class="mb-3 row"><div class="col-sm-5"><button type="submit" id="generateTimeTable"  class="btn btn-primary mb-3">Generate Time Table</button></div></div></div>';
            $('#addForm').append(strBlocksHTML);
        });

        $(document).on("keyup", "#tableSubject", function() {
            var tableSubject = document.getElementById("tableSubject").value;
            var convertIntTableSubject = parseInt(tableSubject);
            if (convertIntTableSubject < 1) {
                alert('Number must be positive');
                var tableSubject = '';
                return tableSubject;
            }
        })
        //generate time table
        $(document).on("click", "#generateTimeTable", function() {
            var workingDays = document.getElementById("days").value;
            var subjectPerDay = document.getElementById("subject").value;
            var table_body = '<table border="1">';
            for (var i = 0; i < subjectPerDay; i++) {
                table_body += '<tr>';
                for (var j = 0; j < workingDays; j++) {
                    table_body += '<td>';
                    table_body += 'Table data';
                    table_body += '</td>';
                }
                table_body += '</tr>';
            }
            table_body += '</table>';
            $('#tableDiv').html(table_body);
        });
    });
</script>

</html>