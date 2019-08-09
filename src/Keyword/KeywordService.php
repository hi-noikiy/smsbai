<?php
namespace jamesluo\smsbai\Keyword;
use jamesluo\smsbai\Lib\CommonService;

class KeywordService extends CommonService{
    public function __construct() {
        parent::__construct ( 'sms', 'service', 'KeywordService' );
    }

    // ABSTRACT METHODS

    public function updateWord ($updateWordRequest){
        return $this->execute ( 'updateWord', $updateWordRequest );
    }
    public function addWord ($addWordRequest){
        return $this->execute ( 'addWord', $addWordRequest );
    }
    public function deleteWord ($deleteWordRequest){
        return $this->execute ( 'deleteWord', $deleteWordRequest );
    }
    public function getWord ($getWordRequest){
        return $this->execute ( 'getWord', $getWordRequest );
    }
}
