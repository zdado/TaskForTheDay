<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Document</title>

</head>

<body>

<h1>Task for the day</h1>

    <?= ucwords('hello, my name is nermin.'); ?>
     

    <ul>
    
        <?php foreach($task as $heading => $value) : ?>

            <li>
                <strong> <?= $heading; ?></strong> <?= $value; ?>
            </li>

        <?php endforeach; ?>

    </ul> <br> <br> 

    <ul>

        <li>
            <strong>Name: </strong> <?= $task['title']; ?>
        </li>

        <li>
            <strong>Dou Date: </strong> <?= $task['due']; ?>
        </li>

        <li>
            <strong>Personal Responsible: </strong> <?= $task['assigned_to']; ?>
        </li>

        <li>
            <strong>Status: </strong> <?= $task['Complited'] ? 'Complite' : 'Incomplite'; ?>
        </li>

    </ul>


</body>

</html>