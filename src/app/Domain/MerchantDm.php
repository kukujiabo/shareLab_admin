<?php
namespace App\Domain;

class MerchantDm {

  public function create($data) {
  
    return \App\request('App.Merchant.AddMerchant', $data);
  
  }

  public function listQuery($data) {
  
    return \App\request('App.Merchant.ListQuery', $data);
  
  }

}
