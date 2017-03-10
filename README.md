# DOMDocumentExtended
Extension of DOMDocument class.

<p><strong>innerHTML() method exapmle usage.</strong></p>

```php
<?php

require_once './DOMDocumentExtended.php';

use DOMDocumentExtended;

$html = "<p><strong>Bold</p><p>This shoudn't be bold.</p>";

$dom = new DOMDocumentExtended;
$dom->loadHTML($html);

$node = $dom->getElementsByTagName('body')[0];
$innerHTML = $dom->innerHTML($node);

echo '<pre>'.htmlentities($html).'</pre>';
```
