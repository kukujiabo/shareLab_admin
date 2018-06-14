<?php
namespace App\Api;

/**
 * 会员反馈
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class MemberAdvise extends BaseApi {

  public function getRules() {
  
    return $this->rules([

      'listQuery' => [
    
        'member_name' => 'member_name|string|false||会员名称'

      ]
    
    ]);
  
  }

  /**
   * 查询反馈列表
   * @desc 查询反馈列表
   *
   * @return array list
   */
  public function listQuery() {
  
    return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));
  
  }

}
