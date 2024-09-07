<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tabel Actions</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            float: left;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
        th, td {
            padding: 8px;
        }
        .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .icon{
            width: 15px;
            height: 15px;
        }
        .button {
            background-color: forestgreen;
            padding: 5px 10px;
            color: white;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        .btn-edit {
            background-color: yellow;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            text-decoration: none;
            /* color: black; */
        }
        .btn-delete {
            background-color: red;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            text-decoration: none;
            /* color: white; */
        }
        .btn-edit img, .btn-delete img {
            width: 15px;
            height: 15px;
        }
    </style>
</head>
<body>
    <h2>Employe <strong>Details</strong></h2>
    <div class="col-md-8">
    <a href="tambah.php" class="button">
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828919.png" alt="Add Icon" class="icon">Tambah</a>    
</div>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>No Hp</th>
            <th>Actions</th>
        </tr>
        
        <tbody>
            <?php
            $data = [
                ['id'=>1, 'name' => 'Jek', 'email' => 'jek@gmail.com', 'phone' => '+62 812-9876-7890'],
                ['id'=>2, 'name' => 'Jakia', 'email' => 'jakia@gmail.com', 'phone' => '+62 813-5678-0977'],
                ['id'=>3, 'name' => 'Zakai', 'email' => 'zakai@gmail.com', 'phone' => '+62 786-2345-6789'],
            ];

        
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td class='actions'>
                <a href='edit.php?id=" . $row['id'] . "' title='Edit' class='btn-edit'>
                        <img class='icon' src='https://cdn-icons-png.flaticon.com/512/1159/1159633.png' alt='Edit'>
                    </a>
                    <a href='delete.php?id=" . $row['id'] . "' title='Delete' class='btn-delete' onclick='return confirm(\"Are you sure you want to delete this item?\");'>
                        <img class='icon' src='https://cdn-icons-png.flaticon.com/512/1214/1214428.png' alt='Delete'>
                    </a>
              </td>";
        echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
