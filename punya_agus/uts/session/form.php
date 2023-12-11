<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style>
  body {
    height: 100vh;
  }

  form {
    height: 140px;
  }
</style>

<body class="d-flex">
  <form class="d-flex mx-auto my-auto p-2 border border-primary border-3 rounded-3" method="post" action="login.php">
    <table>
      <tr>
        <td>Username :</td>
        <td>
          <input type="text" size="20" name="username">
        </td>
      </tr>
      <tr>
        <td>Password :</td>
        <td>
          <input type="password" size="20" name="password">
        </td>
      </tr>
      <tr>
        <td colspan="2" class="mx-auto ">
          <input class="d-flex bg-primary text-white mx-auto py-1 px-3 rounded-3 border-1" type="submit" value="Log In">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>