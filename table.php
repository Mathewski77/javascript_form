<html>
    <head>
        <title>Table Form</title>
    </head>

    <body>
        <h1>Student Record</h1>
        <table id="student_record" border="1"> </table>
        <script>
            const studentRecord = document.getElementById
            ("student_record");

            console.log("Hello World");
            const row1 = studentRecord.insertRow();
            const row1col1= row1.insertCell();
            row1col1.innerHTML = "LastName";

            const row1col2= row1.insertCell();
            row1col2.innerHTML = "FirstName";

            console.log(studentRecord);
        </script>
        </form>
    </body>

</html>