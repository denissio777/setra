<div class="site-index">
    <div class="body-content">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Numder</th>
                <th scope="col">Type</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Created at</th>
                <th scope="col">Start at</th>
                <th scope="col">Complete at</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?= $one->id ?></th>
                    <td><?= $one->type ?></td>
                    <td><?= $one->description ?></td>
                    <td><?= $one->status ?></td>
                    <td><?= $one->created_at ?></td>
                    <td><?= $one->start_at ?></td>
                    <td><?= $one->complete_at ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>