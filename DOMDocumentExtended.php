<?php

Use DOMDocument;

// Extension of DOMDocument class.
class DOMDocumentExtended extends DOMDocument
{

  function innerHTML($node)
  {
    return false;
  }
}
