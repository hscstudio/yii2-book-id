<!DOCTYPE html>
<html>
<head>
    <title>Data Category</title>
    <style type="text/css">
    .page{padding:2cm;}
    table{border-spacing:0;border-collapse: collapse;width:100%;}
    table td, table th{border: 1px solid #ccc;}
    </style>
</head>
<body>    
    <div class="page">    
        <h1>Data Category</h1>
        <table border="0">
        <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
        </tr>
        <?php
        $no = 1;
        foreach($dataProvider->getModels() as $category){ 
        ?>
        <tr>
                <td><?= $no++ ?></td>
                <td><?= $category->title ?></td>
                <td><?= $category->description ?></td>
        </tr>
        <?php
        }
        ?>
        </table>
    </div>   
</body>
</html>
