<!-- resources/views/logout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <!-- Include your CSS and JavaScript dependencies here -->
</head>
<body>

<div>
    <p>Are you sure you want to logout?</p>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>

<!-- Include your other scripts here -->

</body>
</html>
