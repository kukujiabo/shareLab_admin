<?php
namespace App\Api;

/**
 * 商户api
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class Merchant extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'create' => [

        'mcode' => 'mcode|string|true||商户号',
        'mname' => 'mname|string|true||商家名称',
        'thumbnail' => 'thumbnail|string|true||商家头像',
        'brief' => 'brief|string|false||商家简介',
        'phone' => 'phone|string|false||商户手机号',
        'image_text' => 'image_text|string|false||商家图文详情',
        'carousel' => 'carousel|string|false||商家轮播图',
        'status' => 'status|int|false|1|商户状态'
      
      ],

      'listQuery' => [

        'mcode' => 'mcode|string|false||商户号',
        'mname' => 'mname|string|false||商家名称',
        'status' => 'status|int|false|1|商户状态'
        'page' => 'page|int|false|1|页码'
        'page_size' => 'page_size|int|false|20|每页条数'
        'order' => 'order|string|false||排序'

      ]
    
    ]);
  
  }

  /**
   * 新增商户信息
   * @desc 新增商户信息
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 商户列表
   * @desc 商户列表
   *
   * @return array list
   */
  public function listQuery() {
  
    return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));
  
  }


}
