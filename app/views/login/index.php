
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300&family=Maven+Pro&family=Mukta&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&family=Source+Code+Pro:ital,wght@1,200&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <div class="transparan"></div>
            <div class="left-side-container">
                <h1 class="title">Selangkah Lebih Dekat Dengan Impianmu</h1>
                <p class="body">Sebuah layanan E-Learning gratis yang siap membantumu menjadi seorang ahli</p>
            </div>
        </div>
        <div class="right-side">
            <div class="right-side-container">
                <div class="title">
                    <h2>Login</h2>
                    <p>Persiapkan diri untuk masa depan yang penuh dengan bintang</p>
                </div>
                <div class="form">
                    <form action="<?=BASEURL?>/Login/login" method="post">
                        <div class="form-control">
                            <input type="text" placeholder="username" name="username">
                        </div>
                        <div class="form-control">
                            <input type="password" placeholder="password" name="password">
                        </div>
                        <div class="checkbox">
                            <input type="checkbox">
                            <p>simpan info masuk</p>
                        </div>
                        <div class="form-control">
                            <button type="submit">MASUK</button>
                        </div>
                        <div class="form-control">
                            <p><a href="<?=BASEURL?>/Registrasi">Sudah punya akun? Daftar</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>