<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Список контактов</title>
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->
</head>

<style>
  body {background-color: #EFF0F3}

.container {
  margin-top: 50px;
  width: 25%;
}

form {
  background: #2FCC9A;
  border: 2px solid #228e6c;
  border-radius: 10px;
  padding: 20px 10px;
}

#task {
  width: 60%;
  float: left;
  margin-right: 5%;
}</style>

<body>
  <div class="container">
    <h1>Список контактов</h1>
    <form action="/add.php" method="post">
      <input type="text" name="task" id="task" placeholder="Введите имя контакта..." class="form-control">
      <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
    </form>
  </div>
</body>
</html>