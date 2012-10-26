<?php
function _getCfgs(){

    $cfgs = array();
	$cfgs['DIR_APP']       = 'app';		#	��ĿĿ¼
	$cfgs['SET_DB_PREFIX'] = 'xzh_';	#	����ǰ׺
	
    switch ( getenv('SERVER_ADDR') ){
		
		#	���ص��Ի���
        case '127.0.0.1' :
		
            $cfgs['SET_DB_NAME'] = 'test';
            $cfgs['SET_DB_HOST'] = '127.0.0.1';
            $cfgs['SET_DB_USERNAME'] = 'root';
            $cfgs['SET_DB_PASSWORD'] = '';
			
            $cfgs['DEV_MOD'] = true;
        break;
		
		#	���ϻ���
        default:
		    
			$cfgs['SET_DB_NAME'] = 'nyaRWctetNokwguvNUkn';
            $cfgs['SET_DB_HOST'] = getenv('HTTP_BAE_ENV_ADDR_SQL_IP');
            $cfgs['SET_DB_PORT'] = getenv('HTTP_BAE_ENV_ADDR_SQL_PORT');
            $cfgs['SET_DB_USERNAME'] = getenv('HTTP_BAE_ENV_AK');
            $cfgs['SET_DB_PASSWORD'] = getenv('HTTP_BAE_ENV_SK');
        break;
    }
    return $cfgs;
}
return _getCfgs();
/*
return array(
    
    'REQ_MOD_KEY'=> 'm',                  #    �����GET����ģ���ļ���
    'REQ_ACT_KEY'=> 'a',                  #    �����GET����ģ���ļ��еķ�����
    
    'SYS_DEF_MOD'=> 'index',              #    Ĭ�������ģ���ļ���
    'SYS_DEF_ACT'=> 'index',              #    Ĭ��ִ�е�ģ�鷽��
    
    'SYS_CLASS_EXT'=> 'Action',           #    ģ��������׺
    'SYS_FILE_EXT' => 'Action.php',       #    ģ���ļ�����׺

    'DIR_APP'=>'.',                  #    ��Ŀ����Ŀ¼
    'DIR_ACT'=>'act',                #    ��Ŀ����ģ���ļ�Ŀ¼
    'DIR_TPL'=>'tpl',                #    ��Ŀ����ģ���ļ�Ŀ¼
    
    'SET_TPL_THEME' =>'default'          #    ģ������Ŀ¼,������
    'SET_TPL_ENGINE'=>'default'          #    ģ����������,������
    'SET_SQL_TYPE'  =>'mysql'            #    ģ����������,������
);
*/  