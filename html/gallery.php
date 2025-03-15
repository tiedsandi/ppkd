<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Page</title>

    <style>
        * {
            padding: 0;
            margin: 0;
        }

        nav {
            background-color: #28a745;
            color: white;
            padding: 10px;
            display: flex;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: white;
            /* padding: 10px; */
        }

        nav a:hover {
            color: bisque;
        }

        header {
            padding: 20px;
        }

        .content {
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #28a745;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .gallery img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(255, 22, 22, 0.76);
        }
    </style>
</head>

<body>
    <nav>
    <?php require_once 'inc/navbar.php'; ?>
    </nav>
    <header>
        <h1>Gallery Kami</h1>
        <p><small>Foto - foto kebersamaan kami</small></p>
    </header>
    <hr />

    <div class="content">
        <div class="gallery">
            <img src="./img/bromo.jpg" alt="Gambar 1">
            <img src="https://placehold.co/200x150" alt="Gambar 2">
            <img src="./img/bromo.jpg" alt="Gambar 3">
            <img src="https://placehold.co/200x150" alt="Gambar 4">
            <img src="./img/bromo.jpg" alt="Gambar 5">
            <img src="https://placehold.co/200x150" alt="Gambar 6">
            <img src="./img/bromo.jpg" alt="Gambar 7">
            <img src="https://placehold.co/200x150" alt="Gambar 8">
            <img src="./img/bromo.jpg" alt="Gambar 9">
            <img src="https://placehold.co/200x150" alt="Gambar 10">
            <img src="./img/bromo.jpg" alt="Gambar 11">
            <img src="https://placehold.co/200x150" alt="Gambar 12">
            <img src="./img/bromo.jpg" alt="Gambar 13">
        </div>
    </div>

    
    <?php require_once 'inc/footer.php'; ?>
</body>

</html>