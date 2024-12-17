<?php
// Store the data in an associative array
$data = [
    [
        'parent' => 'John Smith',
        'children' => ['Jenny Smith', 'Pearl Smith', 'Luca Smith']
    ],
    [
        'parent' => 'Claire Temple',
        'children' => ['Sayed Temple', 'Abdo Temple']
    ]
];

if(isset($_POST['submit'])):
    $parent=$_POST["parent_name"];
    $children= $_POST["children_names"];
endif;


?>

<body>
<div class="form-container">
    <form method="POST">
        <label for="parent_name">Parent Name:</label>
        <input type="text" name="parent_name" id="parent_name" required placeholder="Enter Parent Name">
        <br><br>

        <label for="children_names">Children Names (comma separated):</label>
        <input type="text" name="children_names" id="children_names" required placeholder="Enter Children's Names">
        <br><br>

        <button type="submit" name="submit">Check</button>
    </form>
</div>

<table>
    <tr>
        <th>Parent Name</th>
        <th>Children's Names</th>
    </tr>

    <?php

    foreach ($data as $entry) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($entry['parent']) . "</td>";
        echo "<td>" . implode(', ', array_map('htmlspecialchars', $entry['children'])) . "</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>
