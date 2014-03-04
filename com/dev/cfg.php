<?php return
array(

        #   入口处理
         
        'CMDMODE' => false,             #   命令行模式
        'LOGBASE' => 3,                 #   日志信息的展现级别, 1info 2warring 3error；上线后选3；
        'REOUTE'  => false,             #   路由处理，可以设置为一个函数。输入值为 $_GET，需要输出一个 array( 'm'=>'' , 'a'=>'' )


        #    数据库设置
        'DB_ENGINE'=> 'Mysql',          #    数据库引擎类型，目前支持 Mysql ， Csv 类型
        'DB_PREFIX'=> '',               #    数据库表前缀，如果是 Csv 数据库类型,表前缀此项相当于数据文件存放目录,相对于 /app/,使用 F 快捷函数读取，意味着你可以使用云存储的数据
        'DB_HOST' => '127.0.0.1:3306',
        'DB_NAME' => 'test',
        'DB_USERNAME' => 'root',
        'DB_PASSWORD' => '',
        'DB_DEFCHART' => 'UTF8',

        
        #    模板默认设置
        'TPL_THEME' => '.',              #    模板主题目录,为一个 . 则默认不使用主题目录，模板目录即为主题目录    相对于 /app/tpl 项目目录
        'TPL_ENGINE'=> 'php',            #    默认PHP，如果是 smarty ，则保持引入了 smarty 模块接口，因为会调用 A('smarty')->fetch( $path , $assign )，返回编译后的代码
        'TPL_LEFT_DELIMITER' => '<!--{', #    模板变量左分界符
        'TPL_RIGHT_DELIMITER'=> '}-->' , #    模板变量右分界符

                                        #   自动重设
        'URL_ROOT'  => '.',             #   首页目录的URL 模板关键字 ../../ 会自动转换成该路径,http://127.0.0.1/
        'URL_PUBLIC'=> '.',             #   模板Public目录的URL 模板关键字 ../Public/  会自动替换成该路径,类似 http://127.0.0.1/app/tpl/default/Public/
        'URL_RELATIVE'=>'.',            #   定位到，网页浏览位置，相对模板的位置
 


        #    项目默认设置，不建议修改
        'DIR_ACT'=> 'act',              #    控制器目录
        'DIR_TPL'=> 'tpl',              #    模板目录             相对于 /app/ 项目目录


        #    核心设置，不建议修改
        'DEF_REQ_KEY_RUT'=> 'r',        #    从 $_GET['r'] 中取得需要运行的模块类和方法，格式为 Mod/Act 或 Mod - 默认为 Mod/index
        'DEF_REQ_KEY_MOD'=> 'm',        #    从 $_GET['m'] 中取得需要运行的模块类
        'DEF_REQ_KEY_ACT'=> 'a',        #    从 $_GET['a'] 中取得模块类需要运行的方法
        'DEF_MOD'=> 'index',            #    默认请求的模块类
        'DEF_ACT'=> 'index',            #    默认执行的模块方法
        'DEC_ACT_EXT'=> 'Action',       #    默认模块类名后缀，例： indexAction.php

        #   自动重设路径，只读
        'PATH_APP'=> '.',               #    框架运行时自动设置
        'PATH_COM'=> '.',               #    项目入口文件绝对路径、项目组件路径
    );