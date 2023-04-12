<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <!-- To do list -->
    <div class="to-do-list mx-auto mt-5">
        <h1 class="text-center mb-4">Todo List</h1>

        <!-- List -->
        <ul class="list-group list-group-numbered">
            <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                <span class="ms-1 me-auto">Ciao</span>

                <!-- Delete element -->
                <span class="badge bg-danger" role="button">
                    <i class="fa-solid fa-trash"></i>
                </span>
                <!-- // Delete element -->
            </li>
        </ul>
        <!-- // List -->

        <!-- Add new element -->
        <div class="input-group mt-3">
            <input type="text" class="form-control" placeholder="Inserisci un elemento" aria-label="Inserisci un elemento" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Inserisci</button>
        </div>
        <!-- // Add new element -->
    </div>

    <!-- Vue JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</body>

</html>