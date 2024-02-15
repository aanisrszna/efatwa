<!-- resources/views/logout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <!-- Include your CSS and JavaScript dependencies here -->
    <style>
        /* Style for the modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        /* Style for the button */
        #logout-btn {
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div>
        <p>Click the button below to logout:</p>
        <button id="logout-btn">Logout</button>

        <!-- The modal -->
        <div id="confirmation-modal" class="modal">
            <div class="modal-content">
                <p>Are you sure you want to logout?</p>
                <button id="confirm-logout-btn">Confirm</button>
                <button id="cancel-logout-btn">Cancel</button>
            </div>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    
        <script>
            // Show the modal when the logout button is clicked
            document.getElementById('logout-btn').addEventListener('click', function() {
                document.getElementById('confirmation-modal').style.display = 'flex';
            });

            // Confirm logout and redirect
            document.getElementById('confirm-logout-btn').addEventListener('click', function() {
                document.getElementById('logout-form').submit();
                window.location.href = "{{ route('fatwas.index') }}";
            });

            // Cancel logout
            document.getElementById('cancel-logout-btn').addEventListener('click', function() {
                document.getElementById('confirmation-modal').style.display = 'none';
            });
        </script>
    </div>

    <!-- Include your other scripts here -->

</body>
</html>
