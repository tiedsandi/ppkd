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
            /* text-align: center; */
            padding: 20px;
            /* background-color: #28a745; */
            /* color: white; */
        }

        .content {
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form input,
        form textarea {
            width: calc(100% - 10px - 20px);
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form textarea {
            height: 100px;
            resize: none;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
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
    </style>
</head>

<body>
    <nav>
    <?php include 'inc/navbar.php'; ?>
    </nav>
    <header>
        <h1>Kontak Kami</h1>
        <p><small>Berinteraksi dengan kami</small></p>
    </header>
    <hr />

    <div class="content" style="background-color: whitesmoke;">
        <form action="" method="post">
            <label for="">Name</label>
            <input type="text" name="nama" id="name" required />

            <label for="">email</label>
            <input type="text" name="email" id="email" required />

            <label for="">pesan</label>
            <textarea name="" id=""></textarea>

            <button>Submit Button</button>
            <!-- <input type="submit " value="simpan" /> -->
        </form>
    </div>

   
    <?php require_once 'inc/footer.php'; ?>
</body>

</html>