<?php

Use DOMDocument;

// Extension of DOMDocument class.
class DOMDocumentExtended extends DOMDocument
{

  function innerHTML($node)
  {
        $innerHTML = '';
        $childNodes = $node->childNodes;
        foreach($childNodes as $childNode)
        {
            $innerHTML .= $this->saveHTML($childNode);
        }
    return $innerHTML;
  }
}
