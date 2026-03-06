<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <meta name="description" content="Learn about the origin of Lorem Ipsum and its historical background.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>
    <?php include_once("header.php"); ?>

    <div class="search-bar">
        <form action="#" method="get">
            <input type="text" name="query" placeholder="Search..." required>
            <button type="submit">Search</button>
        </form>
    </div>

    <main class="container">
        <h1 class="heading">Home Page</h1>

        <section>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has been the industry's
                standard dummy text since the 1500s, when an unknown printer created a type specimen book.
            </p>
            <img src="https://images.pexels.com/photos/775201/pexels-photo-775201.jpeg" alt="A beautiful forest with sunrays through trees">
        </section>

        <section>
            <h2>Where does it come from?</h2>
            <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in classical Latin
                literature from 45 BC, written by Cicero. The standard chunk of Lorem Ipsum is taken from sections
                1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum".
            </p>
            <img src="https://images.pexels.com/photos/326055/pexels-photo-326055.jpeg" alt="Another lush forest">
        </section>

        <section class="explore">
            <h2>Explore More</h2>
            <ul>
                <li><a href="#">About Lorem Ipsum</a></li>
                <li><a href="#">History & Background</a></li>
                <li><a href="#">Latin Literature</a></li>
            </ul>
        </section>
    </main>

    <?php include_once("footer.php"); ?>
</body>

</html>