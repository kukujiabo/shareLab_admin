<?php
namespace App\Domain;

class RewardDm {

  /**
   * 新建文件
   */
  public function create($data) {
  
    return \App\request('App.Reward.Create', $data);
  
  }

  /**
   * 查询列表
   */
  public function listQuery($data) {
  
    return \App\request('App.Reward.ListQuery', $data);
  
  }

  /**
   * 查询详情
   */
  public function getDetail($data) {
  
    return \App\request('App.Reward.GetDetail', $data);
  
  }

}
