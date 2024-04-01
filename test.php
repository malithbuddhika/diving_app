<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* Toast container */
        .toast {
            display: none;
            position: absolute;
            background-color: orange;
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }
    </style>
</head>

<body class="container">

   
    <i id="info-icon" class="bi bi-info-circle" style="cursor: pointer;">icon</i>

    <div id="toast" class="toast">
        This is a toast message.
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const infoIcon = document.getElementById('info-icon');
            const toast = document.getElementById('toast');

            infoIcon.addEventListener('click', function () {
                toast.style.display = 'block';
                // Position the toast below the info icon
                const iconRect = infoIcon.getBoundingClientRect();
                toast.style.top = iconRect.bottom + 'px';
                toast.style.left = iconRect.left + 'px';

                // Hide the toast after 5 seconds
                setTimeout(function () {
                    toast.style.display = 'none';
                }, 5000);
            });
        });
    </script>
</body>

</html>
