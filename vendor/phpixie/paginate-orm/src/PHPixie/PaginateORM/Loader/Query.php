<?php

namespace PHPixie\PaginateORM\Loader;

class Query implements \PHPixie\Paginate\Loader
{
    protected $query;
    protected $preload;
    
    public function __construct($query, $preload = array())
    {
        $this->query   = $query;
        $this->preload = $preload;
        
        $this->originalLimit  = $query->getLimit();
        $this->originalOffset = $query->getOffset();
    }
    
    public function getCount()
    {
        $this->restoreLimitAndOffset();
        return $this->query->count();
    }
    
    public function getItems($offset, $limit)
    {
        if($this->originalOffset === null) {
            $offset+= $this->originalOffset;
        }
        
        $items = $this->query
            ->limit($limit)
            ->offset($offset)
            ->find($this->preload);
        
        $this->restoreLimitAndOffset();
        return $items;
    }
    
    protected function restoreLimitAndOffset()
    {
        if($this->originalLimit !== null) {
            $this->query->limit($this->originalLimit);
        }else{
            $this->query->clearLimit();
        }
        
        if($this->originalOffset !== null) {
            $this->query->offset($this->originalOffset);
        }else{
            $this->query->clearOffset();
        }
    }
}