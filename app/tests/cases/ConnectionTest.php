<?php

namespace app\tests\cases;

use \lithium\data\Connections;

class ConnectionTest extends \lithium\test\Unit {

	public function test() {

		$conn = Connections::get('default');
		$this->assertFalse($conn === null, "Default connection not present");

	}

}

?>