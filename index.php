<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella Utenti e Film</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 2px solid #ddd;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
        }
        td {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Tabella degli Utenti e dei Film</h1>
    <?php
    
    $users = ['Vito', 'Giuseppe', 'Salvatore'];
    $movies = ['Scarface', 'Avengers', 'Spiderman', 'Il Cavaliere Oscuro'];

    
    $ratings = [];

    
    foreach ($users as $user) {
        foreach ($movies as $movie) {
            
            $ratings[$user][$movie] = rand(0, 1);
        }
    }
    ?>
    <table>
        <thead>
            <tr>
                <th>Utenti</th>
                <?php foreach ($movies as $movie): ?>
                    <th><?php echo htmlspecialchars($movie); ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user); ?></td>
                    <?php foreach ($movies as $movie): ?>
                        <td><?php echo $ratings[$user][$movie]; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
