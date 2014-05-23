<?php

/**
 * Test: Tracy\Dumper::toHtml() with location
 */

use Tracy\Dumper,
	Tester\Assert;


require __DIR__ . '/../bootstrap.php';


class Test
{
}

Assert::match( '<pre class="tracy-dump" title="Dumper::toHtml( new Test, array(&quot;location&quot; =&gt; TRUE) ) )
in file %a% on line %d%" data-tracy-href="editor:%a%"><span class="tracy-dump-object" data-tracy-href="editor:%a%">Test</span> <span class="tracy-dump-hash">#%h%</span>
<small>in <a href="editor:%a%">%a%:%d%</a></small></pre>
', Dumper::toHtml( new Test, array("location" => TRUE) ) );
