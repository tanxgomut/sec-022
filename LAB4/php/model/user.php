<?php 
include "condb.php";
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<table>
    <thead>
        <tr>#</tr>
        <tr>name</tr>
        <tr>last name</tr>
        <tr>edit</tr>
        <tr>delete</tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tr_student ORDER BY stu_id DESC";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?= $row['stu_id'] ?></td>
            <td><?= $row['stu_name'] ?></td>
            <td><?= $row['stu_sname'] ?></td>
            <td><button class="btn_edit" data="<?= $row['stu_id'] ?>">edit</button></td>
            <td><button class="btn_delete" data="<?= $row['stu_id'] ?> ">delete</button></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<script>
    $('.btn_delete').click(function () {
        alert($(this).attr('data'));
    });
</script>