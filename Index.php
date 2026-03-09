<?php
// ==============================
// CLASS USER (PARENT)
// ==============================

class User {

    private $nama;
    private $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getEmail() {
        return $this->email;
    }

    protected function tampilData() {
        return "
            <p><strong>Email:</strong> {$this->email}</p>
        ";
    }
}

// ==============================
// MAHASISWA
// ==============================

class Mahasiswa extends User {

    private $nim;

    public function __construct($nama, $email, $nim) {
        parent::__construct($nama, $email);
        $this->nim = $nim;
    }

    public function tampil() {
        return "
        <div class='card'>
            <div class='icon mahasiswa'>🎓</div>
            <h3>{$this->getNama()}</h3>
            <span class='role'>Mahasiswa</span>
            " . parent::tampilData() . "
            <p><strong>NIM:</strong> {$this->nim}</p>
        </div>
        ";
    }
}

// ==============================
// DOSEN
// ==============================

class Dosen extends User {

    private $nidn;

    public function __construct($nama, $email, $nidn) {
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
    }

    public function tampil() {
        return "
        <div class='card'>
            <div class='icon dosen'>👨‍🏫</div>
            <h3>{$this->getNama()}</h3>
            <span class='role'>Dosen</span>
            " . parent::tampilData() . "
            <p><strong>NIDN:</strong> {$this->nidn}</p>
        </div>
        ";
    }
}

// ==============================
// ADMIN
// ==============================

class Admin extends User {

    public function __construct($nama, $email) {
        parent::__construct($nama, $email);
    }

    public function tampil() {
        return "
        <div class='card'>
            <div class='icon admin'>🛠</div>
            <h3>{$this->getNama()}</h3>
            <span class='role'>Admin</span>
            " . parent::tampilData() . "
        </div>
        ";
    }
}

// ==============================
// DATA
// ==============================

$users = [
    new Mahasiswa("Adinda Revita", "adinda@email.com", "2210112345"),
    new Dosen("Budi Santoso", "budi@email.com", "01020304"),
    new Admin("Siti Aminah", "admin@email.com")
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Kampus OOP</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f9;
        }

        /* NAVBAR */
        nav {
            background-color: #2c3e50;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        nav .menu a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
        }

        nav .menu a:hover {
            text-decoration: underline;
        }

        /* HEADER */
        header {
            text-align: center;
            padding: 40px 20px 20px;
        }

        header h1 {
            margin-bottom: 5px;
        }

        header p {
            color: #666;
        }

        /* CONTAINER */
        .container {
            padding: 40px;
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        /* CARD */
        .card {
            background: white;
            width: 260px;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 8px 18px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-6px);
        }

        .icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .role {
            display: inline-block;
            margin: 8px 0 12px;
            padding: 4px 10px;
            background: #ecf0f1;
            border-radius: 20px;
            font-size: 12px;
        }

        footer {
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            color: #777;
        }
    </style>
</head>
<body>

<nav>
    <div><strong>Sistem Kampus</strong></div>
    <div class="menu">
        <a href="#">Home</a>
        <a href="#">Data Pengguna</a>
        <a href="#">About</a>
    </div>
</nav>

<header>
    <h1>Dashboard Pengguna Kampus</h1>
    <p>Implementasi OOP: Constructor, Encapsulation, Inheritance</p>
</header>

<div class="container">
    <?php
        foreach($users as $u){
            echo $u->tampil();
        }
    ?>
</div>

<footer>
    © <?php echo date("Y"); ?> - Tugas Pemrograman Berbasis Objek
</footer>

</body>
</html>