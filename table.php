<html>
    <head>
        <title>Table Form</title>
    </head>

    <body>
        <h1>Student Record</h1>
        <table id="student_record"> </table>
        <script>
            const studentRecord = document.getElementById
            ("student_record");
            console.log("Hello World");
            const row1 = studentRecord.insertRow();
            const row1col1= row1.insertCell();
            row1col1.innerHTML = "LastName";
            console.log(studentRecord);
        </script>
        </form>
    </body>

</html>