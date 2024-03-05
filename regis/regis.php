<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Registrasi </title>
    <link rel="stylesheet" href="../css/style4.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Id Akun</span>
            <input type="text" placeholder="Masukan id akun" required>
          </div>
          <div class="input-box">
            <span class="details">Nama</span>
            <input type="text" placeholder="masukan nama anda" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="masukan username anda" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="masukan password anda" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="masukan alamat email anda" required>
          </div>
          <div class="input-box">
            <span class="details">No HP</span>
            <input type="text" placeholder="masukan nomor hp" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>