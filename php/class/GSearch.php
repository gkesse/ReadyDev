<?php   
    class GSearch extends GModule {
        //===============================================
        protected  $lastId = 0;
        protected  $dataCount = 0;
        protected $dataSize = 0;
        protected $dataOffset = 0;
        //===============================================
        public function __construct() {
            parent::__construct();
        }
        //===============================================
        public function serialize($code = "search") {
            $lDom = new GCode();
            $lDom->createDoc();
            $lDom->addData($code, "last_id", "".$this->lastId);
            $lDom->addData($code, "data_count", "".$this->dataCount);
            $lDom->addData($code, "data_size", "".$this->dataSize);
            $lDom->addData($code, "data_offset", "".$this->dataOffset);
            return $lDom->toStringData();
        }
        //===============================================
        public function deserialize($data, $code = "search") {
            parent::deserialize($data);
            $lDom = new GCode();
            $lDom->loadXml($data);
            $this->lastId       = $lDom->getItem($code, "last_id");
            $this->dataCount    = $lDom->getItem($code, "data_count");
            $this->dataSize     = $lDom->getItem($code, "data_size");
            $this->dataOffset   = $lDom->getItem($code, "data_offset");
        }
        //===============================================
    }
?>            