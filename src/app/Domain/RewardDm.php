<?php
namespace App\Domain;

class RewardDm {

  /**
   * 新建文件
   */
  public function create($data) {
  
    return \App\request('App.Reward.Create', $data);
  
  }

}
