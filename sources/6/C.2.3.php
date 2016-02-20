use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;

public function behaviors(){    
    return [        
        TimestampBehavior::className(),
        BlameableBehavior::className()
    ];
}
