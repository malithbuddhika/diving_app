<?php
include $_SERVER['DOCUMENT_ROOT'] . '/connection.php';

// Fetch data from the database
$sql = "SELECT doc4.userID, user_data.name, doc4.status, user_data.birthday
        FROM doc4
        INNER JOIN user_data ON doc4.userID = user_data.id";
$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participant List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Participant Information</h2>
        <table id="participantTable" class="table">
            <thead>
                <tr>
                    <th scope="col">Participant Name</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr data-userid='" . $row["userID"] . "'>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["birthday"] . "</td>";
                        echo "<td>" . $row["status"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No participants found</td></tr>";
                }
               

                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (Optional if you need dropdowns, modals, etc.) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
        // Add click event listener to rows
        document.addEventListener("DOMContentLoaded", function() {
            var tableRows = document.querySelectorAll("#participantTable tbody tr");
            tableRows.forEach(function(row) {
                row.addEventListener("click", function() {
                    var userId = row.getAttribute("data-userid");
                    var name = row.querySelector("td:nth-child(1)").innerText;
                    var birthday = row.querySelector("td:nth-child(2)").innerText;
                    window.location.href = "viewParticipantQuestionnaire.php?userID=" + userId + "&name=" + name + "&birthday=" + birthday;
                });
            });
        });
    </script>



</body>

</html>