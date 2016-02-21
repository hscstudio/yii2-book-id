<td><?= Html::checkbox('auth[]',$row['auth'],[
    'class' => 'processAuth',
    'data-module' => $row['module'],
    'data-controller' => $row['controller'],
    'data-action' => $row['action'],
]); ?></td>
