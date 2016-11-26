<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Hubsine\Marketplace\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Hubsine\Framework\Entity\UserMeta as BaseUserMeta;

/**
 * SellerMeta
 *
 * @author Hubsine
 */
class UserMeta extends BaseUserMeta{

    
    /**
     *
     * @var int user_meta
     */
    public $user_id;
    
    /**
     *
     * @var string user_meta
     */
    public $meta_key;
    
    /**
     *
     * @var string user_meta
     */
    public $meta_value;
//    
//    public function getUser_Id(){
//        return $this->user_id;
//    }
//    
//    public function setUser_Id($user_id){
//        $this->user_id = $user_id;
//        return $this;
//                }

    public function __construct(array $metaData) {
        
        $this->user_id = (isset($metaData['user_id'])) ? $metaData['user_id'] : null;
        $this->meta_key = (isset($metaData['meta_key'])) ? $metaData['meta_key'] : null;
        $this->meta_value = (isset($metaData['meta_value'])) ? $metaData['meta_value'] : null;
        
    }
    
    public static function loadValidatorMetadata(ClassMetadata $metadata){
        
        $userMetaConstraints = new UserMetaConstraint();

        $metadata->addPropertyConstraints('user_id', $userMetaConstraints->user_id);
        $metadata->addPropertyConstraints('meta_key', $userMetaConstraints->meta_key);
        $metadata->addPropertyConstraints('meta_value', $userMetaConstraints->meta_value);
        
    }
}
