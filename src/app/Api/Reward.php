<?php
namespace App\Api;

/**
 * 赠品接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class Reward extends BaseApi {

  public function getRules() {
  
    return $this->rules([

      'create' => [
      
        'reward_name' => 'reward_name|string|true||赠品名称',
        'reward_code' => 'reward_code|string|true||赠品编码',
        'price' => 'price|float|true||赠品价格',
        'thumbnail' => 'thumbnail|string|true||赠品图标',
        'brief' => 'brief|string|true||赠品简介',
        'shop_id' => 'shop_id|int|true||赠品所属门店',
        'status' => 'status|int|false||赠品状态',
        'imgs' => 'imgs|string|false||赠品轮播图',
        'start_time' => 'start_time|string|false||赠品有效期开始',
        'end_time' => 'end_time|string|false||赠品有效期结束'
      
      ]
    
    ]);
  
  }

  /**
   * 新建赠品
   * @desc 新建赠品
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
