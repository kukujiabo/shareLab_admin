<?php
namespace App\Domain;

class ShopDm {

  /**
   * 新建
   */
  public function create($data) {
  
    return \App\request('App.Shop.Create', $data);
  
  }

  /**
   * 列表
   */
  public function listQuery($data) {
  
    return \App\request('App.Shop.ListQuery', $data);
  
  }


}
