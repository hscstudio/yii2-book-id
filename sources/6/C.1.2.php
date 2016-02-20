use yii\db\Expression;

public function behaviors(){    
    return [        
        [            
        'class' => TimestampBehavior::className(),
        'createdAtAttribute' => 'create_time',
        'updatedAtAttribute' => 'update_time',
        'value' => new Expression('NOW()'),        
        ],    
    ];
}
