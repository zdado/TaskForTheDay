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

    </ul> <br>

    <ul>

        <li>
            <strong>Name: </strong> <?= $task['title']; ?>
        </li>

        <li>
            <strong>Dou Date: </strong> <?= $task['due']; ?>
        </li>

        <li>
            <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
        </li>

        <li>

                <strong>Status: </strong> 

                <?php if($task['complited']) : ?>
                    <span class="icon">&#9989</span>
                <?php else : ?>
                    <span class="icon">incomplited</span>
                <?php endif; ?>

        </li>

        <li>

                <strong>Did you find all articles?: </strong>

                <?php if($task['find']) : ?>
                    <span class="icon">&#10004</span>
                <?php else : ?>
                    <span class = "icon">&#10006</span>
                <?php endif; ?>

        </li>

        <li>

                <strong>Did you have enough money?: </strong>

                <?php if($task['haveMoneyForAll']) : ?>
                    <span class = "icon"> &#10062  </span>
                <?php else : ?>
                    <span class = "icon"> &#10060  </span>
                <?php endif; ?>

        </li>

    </ul>


</body>

</html>
