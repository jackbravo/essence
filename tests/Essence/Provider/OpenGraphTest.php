<?php

/**
 *	@author Félix Girault <felix.girault@gmail.com>
 *	@license FreeBSD License (http://opensource.org/licenses/BSD-2-Clause)
 */

namespace Essence\Provider;

if ( !defined( 'ESSENCE_BOOTSTRAPPED')) {
	require_once dirname( dirname( dirname( __FILE__ ))) . DIRECTORY_SEPARATOR . 'bootstrap.php';
}



/**
 *	Test case for OpenGraph.
 */

class OpenGraphTest extends \PHPUnit_Framework_TestCase {

	/**
	 *
	 */

	public function testFetch( ) {

		$OpenGraph = new ConcreteOpenGraph( OpenGraph::anything );

		$this->assertNotNull(
			$OpenGraph->fetch( 'file://' . ESSENCE_TEST_HTTP . 'valid.html' )
		);
	}



	/**
	 *
	 */

	public function testFetchInvalid( ) {

		$this->setExpectedException( '\\Essence\\Exception' );

		$OpenGraph = new ConcreteOpenGraph( OpenGraph::anything );
		$OpenGraph->fetch( 'file://' . ESSENCE_TEST_HTTP . 'invalid.html' );
	}
}



/**
 *
 */

class ConcreteOpenGraph extends \Essence\Provider\OpenGraph {

}