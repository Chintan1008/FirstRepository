<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
    
<table>
    <form method="post" encrypt="multipart/form-data" id="pro_form">
        <tr>
            <td><label for="">product name</label></td>
            <td>
                <input type="text" name="pname">
            </td>
        </tr>
        <tr>
            <td><label for="">price</label></td>
            <td>
                <input type="number" name="price">
            </td>
        </tr>
        <tr>
            <td>
            <label for="">Images</label>
            </td>
            <td>
                <input type="file" name="image" id="" >
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="submit" >
            </td>
        </tr>
    </form>
</table>


<script>
    $(document).ready(function () {
        
        $("#pro_form").on("submit",function(e){
            e.preventDefualt();

            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "insert.php",
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    if(data == 1){
                        alert("dataInserted");
                    }else{
                        alert("dataNotInserted");
                    }
                }
            });
        });
    });
</script>
</body>
</html>