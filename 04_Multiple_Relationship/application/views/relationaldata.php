<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Student ID</th>
                            <th scope="col">Course List</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Create Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($getallrelationdata as $rvalue) {
                        ?>
                            <tr>
                                <th scope="row"><?= $rvalue->id ?></th>
                                <td><?= $rvalue->s_name ?></td>
                                <td><?= $rvalue->s_id ?></td>
                                <td><?= $rvalue->course_list ?></td>
                                <td><?= $rvalue->s_contact ?></td>
                                <td><?= $rvalue->create_time ?></td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>