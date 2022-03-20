

      <div class="login">
        <img src="img/login.png">
        <form action="login-section.php" method="post">
        <div class="label">
          <input type="text" name="userid" class="form-control" placeholder="ID" autocomplete="off">
        </div>
        <div class="label">
          <input type="password" name="password" class="form-control" placeholder="Kata Sandi" autocomplete="off">
        </div>
        <div class="label">
          <select name="akses" class="form-control" placeholder="Akses sebagai?" autocomplete="off">
            <option value="admin">Admin</option>
            <option value="karyawan">Karyawan</option>
            <option value="pimpinan">Pimpinan</option>
          </select>
        </div>
        <div class="label">
          <button class="btn-login" type="submit">MASUK</button>
        </div>
        </form>
      </div>
