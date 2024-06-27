<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增學生</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <style>
        .form-label {
            text-align-last: justify;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">新增學生</h1>
        <form class='form-group mx-auto col-6 mt-5'>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>學號</label>
                <input class="form-control" type="number" name="uni_id" id="uni_id">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>班級代號</label>
                <input class="form-control" type="number" name="classroom" id="classroom">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>座號</label>
                <input class="form-control" type="number" name="seat_num" id="seat_num">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>姓名</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>生日</label>
                <input class="form-control" type="date" name="birthday" id="birthday">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>身份證字號</label>
                <input class="form-control" type="text" name="national_id" id="national_id">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>地址</label>
                <input class="form-control" type="text" name="address" id="address">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>父母</label>
                <input class="form-control" type="text" name="parent" id="parent">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>電話</label>
                <input class="form-control" type="text" name="telphone" id="telphone">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>科系</label>
                <input class="form-control" type="text" name="major" id="major">
            </div>
            <div class='d-flex my-2'>
                <label for="" class='col-3 form-label'>畢業國中</label>
                <input class="form-control" type="text" name="secondary" id="secondary">
            </div>
            <div>
                <input type="button" value="送出" class='btn btn-primary' onclick="send()">
                <input type="reset" value="重置" class='btn btn-warning'>
            </div>
        </form>

    </div>
    <script src="./js/jquery-2.1.4.min.js"></script>
    <script src='./js/bootstrap.js'></script>
</body>

</html>
<script>
    function send() {
        // 建立一個包含表單數據的物件 'form'
        let form = {
            uni_id: $("#uni_id").val(),
            classroom: $("#classroom").val(),
            seat_num: $("#seat_num").val(),
            name: $("#name").val(),
            birthday: $("#birthday").val(),
            national_id: $("#national_id").val(),
            address: $("#address").val(),
            parent: $("#parent").val(),
            telphone: $("#telphone").val(),
            major: $("#major").val(),
            secondary: $("#secondary").val()
        }
        // 向指定的 URL (./api/insert.php) 發送 HTTP POST 請求。
        // form 對象被作為數據發送到伺服器。
        // 當伺服器響應時，執行回調函數。
        $.post("./api/insert.php", form, function (res) {
            console.log(res)
            // 請求成功後的回調函數，參數 'res' 是伺服器返回的響應
            if (res == '1') {
                // 如果伺服器返回 '1'，表示新增成功
                alert('新增成功')
                // 調用 getClassroomStudents 函數並傳入表單中的 'classroom' 值
                getClassroomStudents(form.classroom);
            } else {
                // 如果伺服器返回的不是 '1'，表示新增失敗
                alert('新增失敗')
            }
            // window.location.href = './api/insert.php';
        })

        
    }

</script>