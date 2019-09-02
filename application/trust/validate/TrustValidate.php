<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/2
 * Time: 0:14
 */

namespace app\trust\validate;

use think\Validate;

/**
 * Class TrustValidate
 * @package app\trust\validate
 */
class TrustValidate extends  Validate
{
    protected $regex = array(
        'mobile' => '/^1([38][0-9]|4[579]|5[0-3,5-9]|6[6]|7[012345678]|9[89]])\d{8}$/'
    );

    protected $rule = array(
        'trust' => 'alphaDash',   // 委托单号
        'trustNumber' => 'alphaDash',   // 委托单编号
        'serial' => 'number',   // 流水号
        'preCompany' => 'chsDash',   // 预检测机构
        'inputCompany' => 'chsDash',   // 送检测机构
        'materialName' => 'chsDash',   // 试验项目名称
        'project' => 'chsDash',   // 工程名称
        'testName' => 'chsDash',   // 试验项目名称
        'customCompany' => 'chsDash',   // 客户单位名称
        'testType' => 'number',   // 检测类型
        'material' => 'alphaDash',   // 检测内容id
        'input' => 'date',   // 填单日期
        'price' => 'number',   // 检测费
        'submit' => 'number',   // 是否提交
        'print' => 'number',   // 是否打印
        'witness' => 'number',   // 是否见证
        'sample' => 'number',   // 是否送样
        'testing' => 'number',   // 是否试验
        'report' => 'number',   // 是否报告
        'cancellation' => 'number',   // 是否作废
        'allow' => 'number',   // 是否允许收样
        'result' => 'chsDash',   // 检测结果
        'engineering' => 'alphaDash',   // 工程id
        'processing' => 'number',   // 样品处理方式
    );

    protected $message = array();

    protected  $scene = array(
        'list' => array('engineering','trust','serial','preCompany','inputCompany','testName','trustCode','project','customCompany','input','price','submit','print','witness','sample','testing','report','cancellation','allow','result'),
        'trustAdd' => array('serial','preCompany','inputCompany','materialName','project','testName','customCompany','testType','material','input','price','engineering','processing'),
        'trusEdit' => array('trust','serial','preCompany','inputCompany','materialName','project','testName','customCompany','testType','material','input','price','engineering','processing'),
        'trusDel' => array('trust'),
    );
}