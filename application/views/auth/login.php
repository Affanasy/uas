
<body>
    <form action="<?=base_url("auth/login")?>" method="POST">
        <div style="color: white;">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username" />
        </div>
        <div style="color: white;">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password" />
        </div>
        <div style="color: white;">
        <input type="submit" name="login" value="Masuk"></div>
    </form>
    <div style="text-align: center;">
        <td>
            <p style="color: white;">Belum Punya Akun? </p><a style="color: white;" href="<?=base_url("auth/daftar")?>">Daftar Akun</a>
        </td>
    </div>
</body>

