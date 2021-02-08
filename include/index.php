<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php include</title>
    <style>
    body {
        margin-top: 1em;
    }
    .grid-container {
    width: 70%;
    margin: auto;
    background-image: url("tausta.jpg");
    border-radius: 25px;
    padding: 1em;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 1fr 6fr 1fr;
    gap: 1em 1em;
    grid-template-areas:
        "header header header"
        "main main pic"
        "footer footer footer";
    }
    .header { grid-area: header; }
    .footer { grid-area: footer; }
    .main { grid-area: main; }
    .pic { grid-area: pic; }
    img { 
        width: 100%; 
    }
    </style>
</head>
<body>

<div class="grid-container">
    <?php include 'header.php'; ?>
    <div class="main">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia ex culpa repellat commodi ea veniam iusto quisquam, atque earum, quia deserunt sit aspernatur consectetur expedita vel laboriosam placeat nihil ratione reprehenderit, voluptate repellendus harum nobis natus cum! Tenetur distinctio consectetur quisquam rem dolores saepe temporibus earum omnis labore maxime. Vitae eum delectus vero quam aliquid incidunt maxime atque facilis mollitia?</p>
    </div>
    <div class="pic">
        <img src="orava.jpg" alt="">
    </div>
    <?php include 'footer.php'; ?>
</div>
    
</body>
</html>