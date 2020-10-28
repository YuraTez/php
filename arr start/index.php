<?php

    function taskOne($number){
        if($number >= -2 && $number<=1){
       return $number;
        } else{ return "number false"; }
    };

    function taskToo($number){
    if(!($number <= 1 && $number >= -2)){
        return $number;
    } else{ return "number false"; }
};

    function taskTree($number){
    if($number <= -2 || $number >= 1 && $number <= 3){
        return $number;
    } else{ return "number false"; }
};

    function taskFour($x, $y){
    if($y == (0.5 * $x + 1)){
        return 'true';
    } else{ return "false"; }
};

/*echo  taskTree(2);*/

$arrInd = [1,2,3,4,5,6,7,8,9,10];
    function currentPosition($arr){
        echo end($arr) ;
        echo "<br>";
        echo prev($arr);
    };

$shopArr = [
 'mobile phone'=>[
     'name'=>'mobile phone',
     'iphone'=>[
         'name'=>'iphone',
         '5'=>[
             'name'=>'5',
             'prise'=>'100$',
             'availability'=>[
                 'true'=>'в наличие',
                 'false' => 'закончелись,приходи завтра'
             ]

         ],
         '6'=>[
             'name'=>'6',
             'prise'=>'150$',
             'availability'=>[
                 'true'=>'в наличие',
                 'false' => 'закончелись,приходи завтра'
             ]
         ],
         '7'=>[
             'name'=>'7',
             'prise'=>'200$',
             'availability'=>[
                 'true'=>'в наличие',
                 'false' => 'закончелись,приходи завтра'
             ]
         ]
     ],
     'samsung'=>[
         'name'=>'samsung',
         's9'=>[
             'name'=>'s9',
             'prise'=>'100',
             'availability'=>[
                 'true'=>'в наличие',
                 'false' => 'закончелись,приходи завтра'
             ]

         ],
         's10'=>[
             'name'=>'s10',
             'prise'=>'150',
             'availability'=>[
                 'true'=>'в наличие',
                 'false' => 'закончелись,приходи завтра'
             ]
         ],
         's11'=>[
             'name'=>'s11',
             'prise'=>'200',
             'availability'=>[
                 'true'=>'в наличие',
                 'false' => 'закончелись,приходи завтра'
             ]
         ]
     ],
     'nokia'=>[
         'name'=>'nokia',
         '3310'=>[
             'name'=>'3310',
             'prise'=>'1000',
             'availability'=>[
                 'true'=>'в наличие',
                 'false' => 'закончелись,приходи завтра'
             ]

         ],
         '6300'=>[
             'name'=>'6300',
             'prise'=>'1500',
             'availability'=>[
                 'true'=>'в наличие',
                 'false' => 'закончелись,приходи завтра'
             ]
         ],
         '5800'=>[
             'name'=>'5800',
             'prise'=>'2000',
             'availability'=>[
                 'true'=>'в наличие',
                 'false' => 'закончелись,приходи завтра'
             ]
         ]
     ]
 ],
    'tablets'=>[
        'name'=>'tablets',
        'big'=>[
            'name'=>'big',
            '1500'=>[
                'name'=>'1500',
                'prise'=>'100 фантиков',
                'availability'=>[
                    'true'=>'в наличие',
                    'false' => 'закончелись,приходи завтра'
                ]

            ],
            '2000'=>[
                'name'=>'2000',
                'prise'=>'150 фантиков',
                'availability'=>[
                    'true'=>'в наличие',
                    'false' => 'закончелись,приходи завтра'
                ]
            ],
            '2500'=>[
                'name'=>'2500',
                'prise'=>'200 фантиков',
                'availability'=>[
                    'true'=>'в наличие',
                    'false' => 'закончелись,приходи завтра'
                ]
            ]
        ],
        "small"=>[
            'name'=>'small',
            '500'=>[
                'name'=>'500',
                'prise'=>'10 у.е.',
                'availability'=>[
                    'true'=>'в наличие',
                    'false' => 'закончелись,приходи завтра'
                ]

            ],
            '600'=>[
                'name'=>'600',
                'prise'=>'15у.е',
                'availability'=>[
                    'true'=>'в наличие',
                    'false' => 'закончелись,приходи завтра'
                ]
            ],
            '700'=>[
                'name'=>'700',
                'prise'=>'20 у.е.',
                'availability'=>[
                    'true'=>'в наличие',
                    'false' => 'закончелись,приходи завтра'
                ]
            ]
        ],
    ],
    'monitors'=>[
        'name'=>'monitors',
        'lg'=>[
            'name'=>'LG',
            '1'=>[
            'name'=>'LG 1',
            'prise'=>'1,бублик',
            'availability'=>[
                'true'=>'в наличие',
                'false' => 'закончелись,приходи завтра'
            ]

        ],
            '2'=>[
                'name'=>'LG 2',
                'prise'=>'2 бублика',
                'availability'=>[
                    'true'=>'в наличие',
                    'false' => 'закончелись,приходи завтра'
                ]
            ],
            '3'=>[
                'name'=>'LG 3',
                'prise'=>'3 бублика',
                'availability'=>[
                    'true'=>'в наличие',
                    'false' => 'закончелись,приходи завтра'
                ]
            ]
        ],
        'dell'=>[
            'name'=>'DELL',
            '1'=>[
                'name'=>'1415',
                'prise'=>'50 у.е.',
                'availability'=>[
                    'true'=>'в наличие',
                    'false' => 'закончелись,приходи завтра'
                ]

            ],
            '2'=>[
                'name'=>'1416',
                'prise'=>'300 у.е',
                'availability'=>[
                    'true'=>'в наличие',
                    'false' => 'закончелись,приходи завтра'
                ]
            ],
            '3'=>[
                'name'=>'1515',
                'prise'=>'200 у.е.',
                'availability'=>[
                    'true'=>'в наличие',
                    'false' => 'закончелись,приходи завтра'
                ]
            ]
        ],
        'mi'=>[
            'name'=>'MI',
            '1'=>[
                'name'=>'MI 1',
                'prise'=>'100',
                'availability'=>[
                    'true'=>'в наличие',
                    'false' => 'закончелись,приходи завтра'
                ]

            ],
            '2'=>[
                'name'=>'MI 2',
                'prise'=>'15000',
                'availability'=>[
                    'true'=>'в наличие',
                    'false' => 'закончелись,приходи завтра'
                ]
            ],
            '3'=>[
                'name'=>'MI 3',
                'prise'=>'200000$',
                'availability'=>[
                    'true'=>'в наличие',
                    'false' => 'закончелись,приходи завтра'
                ]
            ]
        ]
    ]
];
echo $shopArr['mobile phone']['name'];
echo '<br>';
echo $shopArr['mobile phone']['iphone']['name'];
echo '<br>';
echo $shopArr['mobile phone']['iphone']['5']['name'];
echo '<span style="padding:0 10px;background:aquamarine;">';
echo $shopArr['mobile phone']['iphone']['5']['prise'];
echo '<br>';
//echo $shopArr['mobile phone']['iphone']['5']['availability']['true'];

if($shopArr['mobile phone']['iphone']['5']['availability']['true']){
    echo $shopArr['mobile phone']['iphone']['5']['availability']['true'];
} else{
    echo $shopArr['mobile phone']['iphone']['5']['availability']['false'];
}






