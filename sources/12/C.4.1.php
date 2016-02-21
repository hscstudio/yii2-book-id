public function behaviors()    
{        
    return [            
        'access' => [                
            'class' => AccessControl::className(),       
            'rules' => [                    
                [                        
                    'allow' => true,                      
                    'actions' => ['action1', 'action2'],                       'roles' => ['author'],                
                ],
            ]
        ]
    ]
}
