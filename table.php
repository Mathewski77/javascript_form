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

            const row2 = studentRecord.insertRow();
            const row2col1= row2.insertCell();
            const row2col2= row2.insertCell();

            const inputLastName = document.createElement("Input");
            inputLastName.type = "text";
            inputLastName.placeholder = "Enter Last name";

            const inputFirstName = document.createElement("Input");
            inputFirstName.type = "text";
            inputFirstName.placeholder = "Enter First name";


            row2col1.append(inputLastName);
            row2col2.append(inputFirstName);

            const studentRecord = document.getElementById("myTd").colSpan = "1";



            console.log(studentRecord);
        </script>
        </form>
    </body>

</html>