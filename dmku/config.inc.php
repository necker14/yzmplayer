<?php return [
    'username'=>'cairs',
    '后台密码' => 'Changeme_123+',
    'tips' => [
        'time' => '13',
        'color' => '#fb7299',
        'text' => '视频无法播放、卡顿，请刷新或切换不同线路。',
    ],
    '防窥' => '0',
    '数据库' => [
        '类型' => 'mysql',
        '方式' => 'pdo',
        '地址' => '127.0.0.1',
        '用户名' => 'root',
        '密码' => '123456',
        '名称' => 'dmku',
    ],

    'is_cdn' => 0,  //是否用了cdn
    '限制时间' => 60, //单位s
    '限制次数' => 20, //在限制时间内可以发送多少条弹幕
    '允许url' => [],  //跨域  格式['https://abc.com','http://cba.com']   要加协议
    '安装' => 0
];
