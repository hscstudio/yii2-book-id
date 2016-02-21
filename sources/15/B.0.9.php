<h1>Tools</h1>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Name</th>
        <th>Quantity</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($modelsTools as $indexTools => $modelTools): ?>
        <tr>
            <td><?= $modelTools->name ?></td>
            <td><?= $modelTools->quantity ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
