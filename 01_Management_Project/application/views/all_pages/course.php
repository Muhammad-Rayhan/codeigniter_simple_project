<div class="row justify-content-center mt-5">
    <div class="col-7 border rounded py-2 px">
        <div class="d-flex justify-content-between ">
            <h3 class="fw-bold">Course Details</h3>
            <a href="#" class="btn btn-primary fw-bold">ADD</a>
        </div>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="fw-bold">Serial_number</th>
                    <th scope="col" class="fw-bold">Course List</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($getcourseall_info as $value) : ?>
                    <tr>
                        <td scope="row"><?= $value->serial_number ?></td>
                        <td><?= $value->course_list ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>