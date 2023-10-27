<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('css/create.css') }}" rel="stylesheet">

    <title>Create POrtal</title>
</head>
<body>


<header>

<div class="header">
 

 <h1>Create Your Own Portal</h1>

    <p class="card-text">Effortless Record-Keeping Made Simple: Our innovative service takes the stress out of managing activities, assignments, and attendance. With just a few clicks, you can easily track and organize student records, saving time and energy. Say goodbye to messy paperwork and hello to a more efficient and productive teaching experience. Empower yourself with seamless record-keeping and focus on what truly matters!</p>

    <button class="back"><a href="<?php echo url('home') ?>">Back</a></button>


</div>
   
    

</header>
<main>

<form method="POST" action="/create">
    @csrf
<div class="form-group">
<label>Creator's Name</label>
<input type="text" for="name" name="name" class="form-control" placeholder="Enter Your Name Here">
    </div>

<div class="form-group">
<label>Portal Name</label>
<input type="text" for="portal" name="portal" class="form-control" placeholder="Enter Here">
    </div>

<div class="form-group">
<label>Password</label>
<input type="password" for="password" name="password" class="form-control" placeholder="Enter The Password Here">
    </div>

    <button type="submit" class="btn">Create</button>
    </form>

</main>


<footer>
<p class="credit">©2023 EduGo Portal. All Rights Reserved.</p>
</footer>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>