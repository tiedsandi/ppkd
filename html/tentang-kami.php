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
            margin: 20px 20px;
            /* padding: 20px; */
            background: rgba(201, 5, 5, 0.055);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.267);
            position: relative;
            padding: 20px;
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

        ol {
            list-style-type: none;
            width: 40%;
            display: flex;
            flex-direction: column;
            gap: 30px;
            padding-left: 40px;
        }

        .img-list {
            position: absolute;
            right: 0;
            bottom: 0;
        }

        .img-list img {
            width: 350px;
            height: 250px;
        }
    </style>
</head>

<body>
    <nav>
    <?php require_once 'inc/navbar.php'; ?>
    </nav>
    <header>
        <h1>Visi Misi Kami</h1>
        <p><small>PPKD Jakarta Pusat</small></p>
    </header>
    <hr />

    <div class="content">
        <ol>
            <li>
                <h1>Visi</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum dicta amet hic molestiae, libero iure
                    nobis neque officiis debitis laboriosam necessitatibus eveniet officia quaerat, quidem eius velit.
                    Repudiandae, atque iste!
                </p>
            </li>
            <li>
                <h1>Misi</h1>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse animi quam sequi, molestiae quod
                        alias accusamus voluptate odio dolorum dignissimos? Excepturi iure animi, repudiandae repellat
                        impedit perferendis laborum quod magnam?</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia, est. Commodi omnis illum
                        aliquam blanditiis!</li>
                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, cum aspernatur, et neque
                        ullam numquam sint, eius laborum molestias recusandae saepe esse ad est iste perspiciatis
                        accusamus molestiae perferendis. Illum?</li>
                </ul>
            </li>
        </ol>
        <div class="img-list">
            <img src="./img/bromo.jpg" alt="">
        </div>
    </div>

    <?php require_once 'inc/footer.php'; ?>
</body>

</html>