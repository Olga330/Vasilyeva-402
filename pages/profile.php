<?php
   require_once('../connect.php');

   $emp_no = $_GET['emp_no'];
   $query = $conn->query ("SELECT * FROM `employees`
      LEFT JOIN titles ON titles.emp_no = employees.emp_no WHERE employees.emp_no = $emp_no;
      ");
    $employee = $query->fetch();

   // print_r($employee);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сотрудники</title>
</head>
<body>
<div>
<p><strong>Имя:</strong> <?php echo $employee['first_name']?></p>
        <p><strong>Фамилия:</strong> <?php echo $employee['last_name']?></p>
        <p><strong>Пол:</strong> <?php echo $employee['gender']?></p>
        <p><strong>Дата рождения:</strong> <?php echo $employee['birth_date']?></p>
        <p><strong>Подраздление:</strong> <?php echo $employee['dept_name']?></p>
        <p><strong>Должность:</strong> <?php echo $employee['title']?></p>
        <p><strong>Трудоустроен от</strong> <?php echo $employee['hire_date']?></p>
        <p><strong>Трудоустроен до:</strong> <?php echo $employee['to_date']?></p>
        <p><strong>Работает сейчас:</strong> <?php if ($employee['to_date'] ) {echo 'Да';}
        else {echo  'Нет ' ;}?>
</div>
</body>
</html>