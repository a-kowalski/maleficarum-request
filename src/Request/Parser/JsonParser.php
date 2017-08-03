<?php
/**
 * This class is a specific parser implementation for JSON data parsing
 */
declare (strict_types=1);

namespace Maleficarum\Request\Parser;

class JsonParser extends \Maleficarum\Request\Parser\AbstractParser {
    /* ------------------------------------ Class Methods START ---------------------------------------- */

    /**
     * @see \Maleficarum\Request\Parser\AbstractParser::parsePostData()
     */
    public function parsePostData(): array {
        // fetch request data from phalcon (json is handled in a different way that $_REQUEST)
        $data = (array)$this->getRequest()->getJsonRawBody(true);
        $data = $this->sanitizeData($data);

        return $data;
    }

    /* ------------------------------------ Class Methods END ------------------------------------------ */
}
