<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h2>Danh sách sinh viên</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Mã SV</th>
            <th>Email</th>
        </tr>

        <?php foreach ($students as $sv): ?>
        <tr>
            <td><?= $sv['id'] ?></td>
            <td><?= $sv['fullname'] ?></td>
            <td><?= $sv['student_code'] ?></td>
            <td><?= $sv['email'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
